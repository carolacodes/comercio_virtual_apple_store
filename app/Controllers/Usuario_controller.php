<?php

namespace App\Controllers;

use CodeIgniter\Validation\Validation;

use App\Models\ContactoModel;
use App\Models\UserModel;

class Usuario_controller extends BaseController{

    #PAGINA REGISTRARSE
    public function registrar_usuario(){
        $data ['titulo'] = 'Registrarse';
        return view('plantilla',$data).view('nav').view('registrarse').view('footer');
    }

    public function add_usuario(){
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $validation->setRules(
            [
                'nombre_usuario'=>'required|max_length[150]',
                'apellido_usuario'=>'required|max_length[150]',
                'email_usuario'=>'required|max_length[150]|valid_email|is_unique[usuario.email_usuario]',
                'pass_usuario'=>'required|max_length[300]|min_length[8]',
                'pass_usuario1'=>'required|max_length[300]|min_length[8]|matches[pass_usuario]',
            ],
            [#define los mensajes de error para cada campo
            
            'nombre_usuario'=>[
                'required'=>'El nombre es requerido',
            ],
            
            'apellido_usuario'=>[
                'required'=>'El apellido es requerido',
            ],

            'email_usuario'=>[
                'required'=>'El correo electrónico es obligatorio',
                'valid_email'=>'La direccion de correo debe ser válida',
                'is_unique'=>'El correo ya se encuentra registrado',
            ],

            'pass_usuario'=>[
                'required'=>'La contraseña es requerida',
                'max_length'=>'La contraseña debe tener un maximo de 300 caracteres',
                'min_length'=>'La constraseña debe tener un minimo de 8 caracteres',
            ],

            'pass_usuario1'=>[
                'required'=>'La contraseña es requerida',
                'max_length'=>'La contraseña debe tener un maximo de 300 caracteres',
                'min_length'=>'La constraseña debe tener un minimo de 8 caracteres',
                'matches'=>'La contraseña de confirmacion no coincide con la contraseña',
            ],

            ],
        );

        if($validation->withRequest($request)->run()){
            
            $data=[
                'nombre_usuario'=>$request->getPost('nombre_usuario'),
                'apellido_usuario'=>$request->getPost('apellido_usuario'),
                'email_usuario'=>$request->getPost('email_usuario'),
                'pass_usuario'=>password_hash($request->getPost('pass_usuario'),PASSWORD_BCRYPT),
                'perfil_usuario'=>1,
            ];

            $usuario = new UserModel();
            $usuario->insert($data);

            return redirect()->route('Registrarse')->with('mensaje','Se registro correctamente :)');

        }else{
            $data['titulo'] = 'Registrarse';
            $data['validation']=$validation->getErrors();
            return view('plantilla',$data).view('nav').view('registrarse').view('footer');
        }
    }

    #PAGINA LOGIN
    public function pagina_login()
    {
        $data['titulo'] = 'Login';
        return view('plantilla',$data).view('nav').view('login').view('footer');
    }

    public function login_usuario()
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();
        $session = session();

        $validation->setRules(
            [
                'email_usuario'=>'required|max_length[150]|valid_email',
                'pass_usuario'=>'required|max_length[300]|min_length[8]',
            ],
            [#define los mensajes de error para cada campo
            
            'email_usuario'=>[
                'required'=>'El correo electrónico es obligatorio',
                'valid_email'=>'La direccion de correo debe ser válida',
            ],

            'pass_usuario'=>[
                'required'=>'La contraseña es requerida',
                'max_length'=>'La contraseña debe tener un maximo de 300 caracteres',
                'min_length'=>'La constraseña debe tener un minimo de 8 caracteres',
            ],

            ],
        );

        if($validation->withRequest($request)->run()){
            // Obtener datos del formulario
            $email = $request->getPost('email_usuario');
            $password = $request->getPost('pass_usuario');

            // Verificar credenciales en la base de datos
            $userModel = new UserModel();
            $user = $userModel->where('email_usuario', $email)->first();

            if ($user && password_verify($password, $user['pass_usuario'])) { //las contraseñas están hasheadas
                // Iniciar sesión del usuario

                $data = [
                    'id_usuario'=>$user['id_usuario'],
                    'nombre_usuario'=>$user['nombre_usuario'],
                    'apellido_usuario'=>$user['apellido_usuario'],
                    'perfil_usuario'=>$user['perfil_usuario'],
                    'login'=>TRUE,
                ];

                $session->set($data);
                
                switch($user['perfil_usuario']){
                    case '1':
                        //Cliente
                        return redirect()->route('/');
                        break;
                    case '2':
                        //Administrador
                        return redirect()->route('admin_index');
                        break;
                }
            } else {
                return redirect()->route('Login')->with('mensaje', 'Usuario y/o contraseña son incorrectos.');
            } 
        } else{
            $data['titulo'] = 'Login';
            $data['validation']= $validation->getErrors();
            return view('plantilla',$data).view('nav').view('login').view('footer');
        }

    }


    

    #PAGINA CONTACTO
    public function pagina_contacto()
    {
        $data['titulo'] = 'Contacto';
        return view('plantilla',$data).view('nav').view('contacto').view('footer');
    }

    public function add_contacto(){
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();
        
        //Defino las reglas de validación para los campos del formulario
        $validation->setRules(
            [
                'nombre_contacto'=>'required|max_length[150]',
                'email_contacto'=>'required|max_length[150]|valid_email|',
                'asunto_contacto'=>'required|max_length[150]',
                'mensaje_contacto'=>'required|max_length[300]|min_length[10]',
            ],
            [//Defino los mensajes de error para cada campo
                'nombre_contacto'=>[
                    'required'=>'El nombre es requerido',
                ],

                'email_contacto'=>[
                    'required'=>'El correo electrónico es obligatorio',
                    'valid_email'=>'La direccion de correo debe ser válida',
                ],

                'asunto_contacto'=>[
                    'required' =>'El asunto es obligatorio',
                    'max_length'=>'El asunto de la consulta debe tener un maximo de 100 caracteres'
                ],

                'mensaje_contacto'=>[
                    'required' => 'El mensaje es requerido',
                    'min_length'=>'El mensaje debe tener como mínimo 10 caracteres',
                    'max_length' => 'El mensaje debe tener como máximo 300 caracteres',
                ],
            ]
            );

            if($validation->withRequest($request)->run()){
                //obtener los datos del formulario
                //insertar en la tabla de mensajes
                $data =[
                    'nombre_contacto'=>$request->getPost('nombre_contacto'),
                    'email_contacto'=>$request->getPost('email_contacto'),
                    'asunto_contacto'=>$request->getPost('asunto_contacto'),
                    'mensaje_contacto'=>$request->getPost('mensaje_contacto')
                ];

                $contacto = new ContactoModel();
                $contacto->insert($data);

                return redirect()->route('Contacto')->with('mensaje','Su consulta se envió exitosamente :)');
                
            }else{
                $data['titulo'] = 'Contacto';
                $data['validation']=$validation->getErrors();
                return view('plantilla',$data).view('nav').view('contacto').view('footer');
            }
    }

    #CERRAR SESION
    public function cerrar_sesion(){
        $session = session();
        $session->destroy();
        //podria ser que le envie al login nuevamente o a la pagina de visitante
        return redirect()->route('Login');
    }

}