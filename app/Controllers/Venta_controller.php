<?php

namespace App\Controllers;
use App\Models\ProductoModel;
use App\Models\DetalleVentaModel;
use App\Models\CategoriaModel;
use App\Models\UsuarioModel;
use App\Models\VentaModel;

class Venta_controller extends BaseController{
    
    /*
    public function guardar_venta(){

        $cart = \Config\Services::cart();
        $venta = new VentaModel();
        $detalle = new DetalleVentaModel();

        $productos = new ProductoModel();

        $cart1 = $cart->contents();

        $cliente_id = session('id_usuario');
        if (!$cliente_id) {
            return redirect()->route('carrito')->with('mensaje', 'Para realizar la compra debe loguearse');
        }

        $data = array(
            'id_cliente'=> $cliente_id,
            'fecha_venta'=>date('Y-m-d'),
        );

        $venta_id = $venta->insert($data);
        
        foreach($cart1 as $item){
            $detalle_venta = array(
                'id_venta'=>$venta_id,
                'id_producto'=>$item['id'],
                'detalle_cantidad'=>$item['qty'],
                'detalle_precio'=>$item['price'],
            );

        $producto = $productos->where('id_producto',$item['id'])->first();
        
        $data = [
            'cantidad_producto' =>$producto['cantidad_producto']-$item['qty'],
        ];

        $detalle->insert($detalle_venta);
        }

        $cart->destroy();
        return redirect()->route('carrito')->with('mensaje','Se registro tu orden correctamente');//o detalle de venta
    }
    */

    

    public function guardar_venta(){
        $db = \Config\Database::connect();
        $cart = \Config\Services::cart();
        $venta = new VentaModel();
        $productos = new ProductoModel();
    
        $cart1 = $cart->contents();
    
        // Obtén el id del cliente desde la sesión
        $cliente_id = session('id_usuario');
        $perfil_usuario = session('perfil_usuario');

        if (!$cliente_id) {
            return redirect()->route('Login')->with('mensaje', 'Error: Debe iniciar sesion para comprar un producto.');
        }
    
        // Verificar si el usuario es un administrador
        if ($perfil_usuario == 2) { // 2 asumiendo que es el perfil del administrador
            return redirect()->back()->with('mensaje', 'Error: Administradores no pueden realizar compras.');
        }

        // Inicia una transacción
        $db->transStart();

        // Datos de la venta
        $data = array(
            'id_cliente' => $cliente_id,
            'fecha_venta' => date('Y-m-d'),
        );

        // Inserta la venta y obtiene el id de la venta insertada
        $venta_id = $venta->insert($data);
    
        // Inserta los detalles de la venta y actualiza los productos
        foreach ($cart1 as $item) {
            $detalle_venta = array(
                'id_venta' => $venta_id,
                'id_producto' => $item['id'],
                'detalle_cantidad' => $item['qty'],
                'detalle_precio' => $item['price'],
            );
    
            // Inserta el detalle de la venta manualmente usando el constructor de consultas
            $builder = $db->table('detalle_venta');
            $builder->insert($detalle_venta);
    
            // Actualiza la cantidad del producto
            $producto = $productos->where('id_producto', $item['id'])->first();
            $data = [
                'cantidad_producto' => $producto['cantidad_producto'] - $item['qty'],
            ];
            $productos->update($item['id'], $data);
        }
    
        // Completa la transacción
        $db->transComplete();
    
        if ($db->transStatus() === FALSE) {
            return redirect()->route('carrito')->with('error', 'Error al registrar tu orden.');
        }
    
        // Vacía el carrito de compras
        $cart->destroy();
        return redirect()->route('carrito')->with('mensaje', 'Se registró tu orden correctamente');
    }

    public function listar_ventas(){
        $venta = new VentaModel();
        $data['titulo']= "Listado de ventas";
        $data['ventas']=$venta->join('usuario','usuario.id_usuario=venta.id_cliente')->findAll();

        $perfil_usuario = session('perfil_usuario');
        
        if ($perfil_usuario == 2){
            return view('paginas_administrador/header',$data).view('paginas_administrador/nav_adm').view('paginas_administrador/listar_ventas', $data);
        }
    }
    
    /*
    public function listar_detalle_venta($id=null){
        $detalle_venta = new DetalleVentaModel();
        $venta = new VentaModel();
        $data['titulo']='Detalle de venta';

        $data['ventas']=$venta->where('id_venta',$id)->join('usuario','usuario.id_usuario=venta.id_cliente')->first();

        $data['detalle']=$detalle_venta->where('id_venta',$id)->join('producto','producto.id_producto=detalle_venta.id_producto')->findAll();

        return view('paginas_administrador/header',$data).view('paginas_administrador/nav_adm').view('paginas_administrador/listar_detalle_venta', $data);    
    }
     */


    public function listar_detalle_venta($id=null){
        
        $detalles = new DetalleVentaModel();
        $ventas = new VentaModel();
        

        $data['titulo']='Detalle de venta';
        $data['ventas']= $ventas->where('id_venta', $id)->join('usuario', 'usuario.id_usuario = venta.id_cliente')->first();

        $data['detalle'] =$detalles->where('id_venta', $id)->join('producto','producto.id_producto = detalle_venta.id_producto')->findAll();

        return view('paginas_administrador/header',$data).view('paginas_administrador/nav_adm').view('paginas_administrador/listar_detalle_venta', $data);
    }
}