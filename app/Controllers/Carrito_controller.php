<?php

namespace App\Controllers;
use App\Models\ProductoModel;
use App\Models\CategoriaModel;

class Carrito_controller extends BaseController{
    
    public function ver_carrito(){
        $cart = \Config\Services::cart();
        $data['titulo']='Carrito de compras';

        $perfil_usuario = session('perfil_usuario');
        
        if ($perfil_usuario == 2) { // 2 asumiendo que es el perfil del administrador
            return view('plantilla', $data).view('paginas_administrador/nav_adm').view('carrito',$data).view('footer'); 
        }else{
            return view('plantilla',$data).view('nav').view('carrito',$data).view('footer');
        }

        
    }

    public function agregar_carrito(){

        $cart = \Config\Services::cart();
        $request = \Config\Services::request();

        // Obtener datos del producto
        $id_producto = $request->getPost('id_producto');
        $nombre_producto = $request->getPost('nombre_producto');
        $precio_producto = $request->getPost('precio_producto');
        $imagen_producto = $request->getPost('imagen_producto');

        // Comprobaciones de depuración
        if (!$id_producto || !$nombre_producto || !$precio_producto) {
            // Si faltan datos esenciales, muestra un mensaje de error
            echo "Faltan datos del producto. No se pudo agregar al carrito.";
            return;
        }

        $data = array(
            'id' => $id_producto,
            'name' => $nombre_producto,
            'price' => $precio_producto,
            'qty' => 1,
            'options' => array(
                'image' => $imagen_producto,
            )
        );

        // Insertar producto en el carrito
        $cart->insert($data);

        // Redirigir al carrito
        return redirect()->route('carrito');
    }

    public function vaciar_carrito($all =null){
        $cart = \Config\Services::cart();

        $cart->destroy();

        return redirect()->route('carrito');
    }


    public function eliminar_item($rowid) {
        $cart = \Config\Services::cart();

        // Verificar si el rowid no es nulo o vacío
        if($rowid) {
            // Eliminar el elemento del carrito
            $cart->remove($rowid);
        }
        // Redireccionar al carrito de compras
        return redirect()->to('carrito');

    }

    public function modificar_cantidad($modif, $rowid){
        $cart = \Config\Services::cart();
        $productoModel = new ProductoModel();

        
       // Obtener los artículos del carrito
        $cartItems = $cart->contents();
        $item = null;

        // Buscar el artículo con el rowid dado
        foreach ($cartItems as $cartItem) {
            if ($cartItem['rowid'] === $rowid) {
                $item = $cartItem;
                break;
            }
        }

        // Si no se encuentra el artículo, redirigir con un error
        if (!$item) {
            session()->setFlashdata('error', 'Artículo no encontrado en el carrito.');
            return redirect()->to('carrito');
        }

        // Obtener la cantidad actual del artículo
        $cantidad = $item['qty'];

        // Modificar la cantidad según el parámetro
        if ($modif == 'mas') {
            $id = $item['id'];

            $producto = $productoModel->where('id_producto',$id)->first();
            
            if($cantidad >= $producto['cantidad_producto']){
                return redirect('carrito');
            }else{
                $cantidad++;
            }

        } elseif ($modif == 'menos') {
            $cantidad--;
        }

        // Actualizar o eliminar el artículo del carrito
        if ($cantidad > 0) {
            $data = array(
                'rowid' => $rowid,
                'qty' => $cantidad
            );
            $cart->update($data);
        } else {
            // Si la cantidad es 0 o menor, elimina el artículo del carrito
            $cart->remove($rowid);
        }

        // Redirigir al carrito
        return redirect()->to('carrito');
    }

}