<?php

namespace App\Controllers;
use App\Models\ContactoModel;

class Admin_controller extends BaseController{

    public function admin_index(){
        $data['titulo']='Administrador';
        
        $perfil_usuario = session('perfil_usuario');
        
        if ($perfil_usuario == 2){
            return view('paginas_administrador/header',$data).view('paginas_administrador/nav_adm').view('paginas_administrador/inicio');
        }
    }

    public function ver_consultas(){
        $contactoModel = new ContactoModel();

        $mensajes = $contactoModel->findAll(); //Obtener todas las consultas desde la base de datos
        
        //Cargamos los datos para mandar a la vista
        $data=[
            'titulo'=>'Consultas Disponibles',
            'mensajes'=>$mensajes,
        ];
        
        $perfil_usuario = session('perfil_usuario');
        
        if ($perfil_usuario == 2){
            //le pasamos las data a la vista
            return view('paginas_administrador/header', $data).view('paginas_administrador/nav_adm').view('paginas_administrador/ver_consultas', $data);
        }
    }
    /*
    public function responder_consulta($id=null){
        $contactoModel = new ContactoModel();

        $mensaje = $contactoModel->where('id_contacto',$id)->first();

        $data['mensaje']=$mensaje;

        if (!$data['mensaje']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Consulta no encontrada');
        }

        $data['titulo']='Enviar Mensaje';

        $perfil_usuario = session('perfil_usuario');
        
        if ($perfil_usuario == 2){
            return view('paginas_administrador/header',$data).view('paginas_administrador/nav_adm').view('paginas_administrador/responder_consultas', $data);
        }
        
    }
    */
}