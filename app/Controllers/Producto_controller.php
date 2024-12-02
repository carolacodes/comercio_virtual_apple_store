<?php

namespace App\Controllers;
use App\Models\ProductoModel;
use App\Models\ProveedorModel;
use App\Models\CategoriaModel;


class Producto_controller extends BaseController{

    public function gestionar_productos(){
        $productoModel = new ProductoModel();
        $categoriaModel = new CategoriaModel();

        $productos = $productoModel->join('categoria', 'categoria.id_categoria=producto.categoria_producto')->join('proveedor','proveedor.id_proveedor = producto.proveedor_producto')->findAll();

        $data['titulo']= 'Gestionar Productos';
        $data['productos']= $productos;

        $perfil_usuario = session('perfil_usuario');
        
        if ($perfil_usuario == 2){
            return view('paginas_administrador/header',$data).view('paginas_administrador/nav_adm').view('paginas_administrador/gestionar_productos',$data);
        }
    }

    public function editar_producto($id=null){
        $productoModel = new ProductoModel();
        $categoriaModel = new CategoriaModel();
        $proveedorModel = new ProveedorModel();
        $data['categorias'] = $categoriaModel->findAll();
        $data['proveedores'] = $proveedorModel->findAll();
        $data['productos']= $productoModel->where('id_producto',$id)->first();
        
        if (!$data['productos']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Producto no encontrado');
        }

        $data['titulo']='Editar Producto';

        $perfil_usuario = session('perfil_usuario');
        
        if ($perfil_usuario == 2){
            return view('paginas_administrador/header',$data).view('paginas_administrador/nav_adm').view('paginas_administrador/editar_productos', $data);
        }
        
    }

    public function actualizar_producto(){
        $request = \Config\Services::request();
        $validation = \Config\Services::validation();

        $validation->setRules(
            [
            'nombre_producto'=>'required|max_length[300]',
            'descripcion_producto'=>'required|max_length[500]',
            'categoria_producto'=>'required|is_not_unique[categoria.id_categoria]',
            'precio_producto'=>'required',
            'cantidad_producto'=>'required',
            //'proveedor_producto'=>'required',
            'imagen_producto'=>'if_exist|uploaded[imagen_producto]|max_size[imagen_producto,4096]|is_image[imagen_producto]',
            ],

            [
                'nombre_producto'=>[
                    'required'=>'El nombre del producto es requerido.',
                    'max_length'=>'Maximo 300 caracteres',
                ],

                'descripcion_producto'=>[
                    'required'=>'La descripcion del producto es requerida',
                    'max_length'=>'Maximo 500 caracteres',
                ],

                'categoria_producto'=>[
                    'required'=>'La categoria del producto es requerida',
                ],

                'precio_producto'=>[
                    'required'=>'El precio del producto es requerida',
                ],

                'cantidad_producto'=>[
                    'required'=>'La cantidad del producto es requerida'
                ],

                'imagen_producto' => [
                    'uploaded' => 'Debes subir una imagen del producto',
                    'max_size' => 'La imagen no debe exceder los 4 MB',
                    'is_image' => 'El archivo debe ser una imagen válida'
                ]
            ],
    );

    if($validation->withRequest($request)->run()){
        $img = $this->request->getFile('imagen_producto');
        $nombre_aleatorio = $request->getPost('imagen_actual');

        #isValid()-si se subio es valido(sin errores o si cumple los requisitos de carga/tamaños-permisos-etc/)
        #hasMoved()asegura que el archivo esta en la carpeta temporal y no se llevo a la carpeta final 'assets/uploads'.
        if ($img->isValid() && !$img->hasMoved()){
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH .'assets/uploads',$nombre_aleatorio); #carpeta final 'assets/uploads'
            }
            $id = $request->getPost('id_producto');

            $data =[
                'nombre_producto'=>$request->getPost('nombre_producto'),
                'descripcion_producto'=>$request->getPost('descripcion_producto'),
                'categoria_producto'=> $request->getPost('categoria_producto'),
                'precio_producto'=>$request->getPost('precio_producto'),
                'cantidad_producto'=>$request->getPost('cantidad_producto'),
                'proveedor_producto'=>$request->getPost('proveedor_producto'),
                'img_producto'=>$nombre_aleatorio,
            ];

            $productos = new ProductoModel();
            $productos->update($id, $data);

            return redirect()->route('gestionar_productos')->with('mensaje','El producto se actualizo correctamente! :)');
        
        
    }else{
        $categoria = new CategoriaModel();
        $proveedor = new ProveedorModel();

        $categorias = $categoria->findAll();
        $proveedores = $proveedor->findAll();
        
        $data['titulo']='Editar Producto';
        $data['categorias'] = $categorias;
        $data['proveedores'] = $proveedores;
        $data['validation']= $validation->getErrors();
        
        // Recuperar los datos del producto para mostrarlos en caso de error de validación
        $id = $request->getPost('id_producto');
        $productoModel = new ProductoModel();
        $data['productos'] = $productoModel->where('id_producto', $id)->first();

        return view('paginas_administrador/header',$data).view('paginas_administrador/nav_adm').view('paginas_administrador/editar_productos', $data);
    }
}
    
    
    

    public function eliminar_producto($id){
        $productoModel = new ProductoModel();
        $producto = $productoModel->find($id);

        if ($producto) {
            $producto['estado_producto'] = 0;
            $productoModel->update($id, $producto);
            return redirect()->route('gestionar_productos');
        }
    }

    public function activar_producto($id){
        $productoModel = new ProductoModel();
        $producto = $productoModel->find($id);

        if($producto){
            $producto['estado_producto'] = 1;
            $productoModel->update($id, $producto);
            return redirect()->route('gestionar_productos');
        }
    }

    public function catalogo($orden=null){
        $productos = new ProductoModel();
        //$productos = $productoModel->join('categoria', 'categoria.id_categoria=producto.categoria_producto')->where('estado_producto',1);
        if ($orden == 'precio_asc') {
            $productos->orderBy('(CASE WHEN cantidad_producto = 0 THEN 1 ELSE 0 END)', 'ASC');
            $productos->orderBy('precio_producto', 'ASC');
        } elseif ($orden == 'precio_desc') {
            $productos->orderBy('(CASE WHEN cantidad_producto = 0 THEN 1 ELSE 0 END)', 'ASC');
            $productos->orderBy('precio_producto', 'DESC');
        }else{
            $productos->orderBy('(CASE WHEN cantidad_producto = 0 THEN 1 ELSE 0 END)', 'ASC');
        }

        $data['titulo'] = 'Catalogo';
        $data['h1'] = 'Productos';
        $data['productos'] = $productos->where('estado_producto',1)->findAll();

        $perfil_usuario = session('perfil_usuario');

        if ($perfil_usuario == 2) { // 2 asumiendo que es el perfil del administrador
            return view('plantilla', $data).view('paginas_administrador/nav_adm').view('productos', $data).view('footer'); 
        }else{
            return view('plantilla', $data).view('nav').view('productos', $data).view('footer');
        }

    }


    public function filtrar_categoria($id=null, $orden = null){
        $categoriaModel = new CategoriaModel();
        $productoModel = new ProductoModel();
        $categoria = $categoriaModel->where(('id_categoria'),$id)->first();
        if (!$categoria) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Categoria no encontrada: $id");
        }
        if ($orden == 'precio_asc') {
            $productoModel->orderBy('(CASE WHEN cantidad_producto = 0 THEN 1 ELSE 0 END)', 'ASC');
            $productoModel->orderBy('precio_producto', 'ASC');
        } elseif ($orden == 'precio_desc') {
            $productoModel->orderBy('(CASE WHEN cantidad_producto = 0 THEN 1 ELSE 0 END)', 'ASC');
            $productoModel->orderBy('precio_producto', 'DESC');
        }else{
            $productoModel->orderBy('(CASE WHEN cantidad_producto = 0 THEN 1 ELSE 0 END)', 'ASC');
        }

        $data['id_categoria'] = $categoria['id_categoria'];
        $data['titulo'] = $categoria['nombre_categoria'];
        $data['h1'] = $categoria['nombre_categoria'];
        $data['productos'] = $productoModel->where('categoria_producto', $id)->where('estado_producto',1)->findAll();

        $perfil_usuario = session('perfil_usuario');
        
        if ($perfil_usuario == 2) { // 2 asumiendo que es el perfil del administrador
            return view('plantilla', $data).view('paginas_administrador/nav_adm').view('productos', $data).view('footer'); 
        }else{
            return view('plantilla', $data).view('nav').view('productos', $data).view('footer');
        }
    }


    public function cargar_productos(){
        $data['titulo']='cargar productos';

        $categoria = new CategoriaModel();
        $proveedor = new ProveedorModel();

        $categorias = $categoria->findAll();
        $proveedores = $proveedor->findAll();

        $data['categorias'] = $categorias;
        $data['proveedores'] = $proveedores;
        
        $perfil_usuario = session('perfil_usuario');
        
        if ($perfil_usuario == 2){
            return view('paginas_administrador/header',$data).view('paginas_administrador/nav_adm').view('paginas_administrador/cargar_productos',$data);
        }
    }

    public function registrar_producto(){
        $request = \Config\Services::request();
        $validation = \Config\Services::validation();

        $validation->setRules(
            [
            'nombre_producto'=>'required|max_length[300]',
            'descripcion_producto'=>'required|max_length[500]',
            'categoria_producto'=>'required|is_not_unique[categoria.id_categoria]',
            'precio_producto'=>'required',
            'cantidad_producto'=>'required',
            //'proveedor_producto'=>'required',
            'imagen_producto'=>'uploaded[imagen_producto]|max_size[imagen_producto,4096]|is_image[imagen_producto]',
            ],

            [
                'nombre_producto'=>[
                    'required'=>'El nombre del producto es requerido.',
                    'max_length'=>'Maximo 300 caracteres',
                ],

                'descripcion_producto'=>[
                    'required'=>'La descripcion del producto es requerida',
                    'max_length'=>'Maximo 500 caracteres',
                ],

                'categoria_producto'=>[
                    'required'=>'La categoria del producto es requerida',
                ],

                'precio_producto'=>[
                    'required'=>'El precio del producto es requerida',
                ],

                'cantidad_producto'=>[
                    'required'=>'La cantidad del producto es requerida'
                ],

                'imagen_producto' => [
                    'uploaded' => 'Debes subir una imagen del producto',
                    'max_size' => 'La imagen no debe exceder los 4 MB',
                    'is_image' => 'El archivo debe ser una imagen válida'
                ]
            ],
    );

    if($validation->withRequest($request)->run()){
        $img = $this->request->getFile('imagen_producto');
        $nombre_aleatorio = $img->getRandomName();
        $img->move(ROOTPATH.'assets/uploads',$nombre_aleatorio);
        
        

        $data =[
            'nombre_producto'=>$request->getPost('nombre_producto'),
            'descripcion_producto'=>$request->getPost('descripcion_producto'),
            'categoria_producto'=> $request->getPost('categoria_producto'),
            'precio_producto'=>$request->getPost('precio_producto'),
            'cantidad_producto'=>$request->getPost('cantidad_producto'),
            'proveedor_producto'=>$request->getPost('proveedor_producto'),
            'img_producto'=>$nombre_aleatorio,
        ];

        $producto = new ProductoModel();
        $producto->insert($data);

        return redirect()->route('cargar_productos')->with('mensaje','El producto se registro correctamente! :)');
        
    }else{
        $categoria = new CategoriaModel();
        $proveedor = new ProveedorModel();

        $categorias = $categoria->findAll();
        $proveedores = $proveedor->findAll();
        
        $data['titulo']='Cargar Producto';
        $data['validation']= $validation->getErrors();
        $data['categorias'] = $categorias;
        $data['proveedores'] = $proveedores;

        return view('paginas_administrador/header',$data).view('paginas_administrador/nav_adm').view('paginas_administrador/cargar_productos');
    }
    
    }
}