<?php

namespace App\Controllers;

class Home extends BaseController
{
    #PAGINA DE INICIO:
    public function index()
    {
        $data['titulo'] = 'Apple Store';

        return view('plantilla',$data).view('nav').view('inicio').view('footer');

    }
    

    #PAGINA ACERCA DE NOSOTROS

    public function acerca_nosotros()
    {
        $data['titulo'] = 'Acerca de Nosotros';
        return view('plantilla', $data).view('nav').view('acerca_de_nosotros').view('footer');

    }

    
    #PAGINA TERMINOS Y CONDICIONES  
    public function terminos_condiciones(){
        $data['titulo'] = 'Terminos y Condiciones';
        return view('plantilla', $data).view('nav').view('terminos').view('footer');
    }

    public function productos(){
        $data['titulo'] = 'Productos';
        return view('plantilla', $data).view('nav').view('Catalogo/nav_catalogo').view('productos').view('footer');
    }

    public function comercializacion(){
        $data['titulo'] = 'Comercializacion';
        return view('plantilla', $data).view('nav').view('comercializacion').view('footer');
    }

    public function catalogo_mac(){
        $data['titulo'] = 'Mac';
        return view('plantilla', $data).view('nav').view('Catalogo/nav_catalogo').view('Catalogo/mac').view('footer');
    }

    
}
