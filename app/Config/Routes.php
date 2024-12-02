<?php

namespace Config;

use App\Controllers\Usuario_controller;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

#USUARIO CONTROLLER (GET)
$routes->get('Login','Usuario_controller::pagina_login');
$routes->get('Registrarse', 'Usuario_controller::registrar_usuario');
$routes->get('Contacto','Usuario_controller::pagina_contacto');
$routes->get('logout','Usuario_controller::cerrar_sesion');
$routes->get('user_admin','Usuario_controller::paginas_administrador');


#HOME
$routes->get('/', 'Home::index');
$routes->get('Acerca de Nosotros','Home::acerca_nosotros');
$routes->get('Terminos y Condiciones','Home::terminos_condiciones');
$routes->get('Productos','Home::productos');
$routes->get('Comercializacion','Home::comercializacion');
$routes->get('Mac','Home::catalogo_mac');


#ADMINISTRADOR CONTROLLER (GET)
$routes->get('admin_index','Admin_controller::admin_index');
$routes->get('ver_consultas','Admin_controller::ver_consultas');
$routes->get('responder_consulta/(:num)', 'Admin_controller::responder_consulta/$1');


#PRODUCTOS CONTROLLER (GET)
$routes->get('catalogo', 'Producto_controller::catalogo');
$routes->get('catalogo/(:segment)', 'Producto_controller::catalogo/$1');
$routes->get('cargar_productos', 'Producto_controller::cargar_productos');
$routes->get('gestionar_productos', 'Producto_controller::gestionar_productos');
$routes->get('eliminar_producto/(:num)', 'Producto_controller::eliminar_producto/$1');
$routes->get('activar_producto/(:num)','Producto_controller::activar_producto/$1');
$routes->get('editar_producto/(:num)','Producto_controller::editar_producto/$1');
$routes->get('filtrar_categoria/(:num)', 'Producto_controller::filtrar_categoria/$1');
$routes->get('filtrar_categoria/(:num)/(:segment)','Producto_controller::filtrar_categoria/$1/$2');



#PRODUCTOS CONTROLLER (POST)
$routes->post('registrar_producto','Producto_controller::registrar_producto');
$routes->post('actualizar_producto','Producto_controller::actualizar_producto');



#USUARIO CONTROLLER (POST)
$routes->post('consulta','Usuario_controller::add_contacto');
$routes->post('registrar_usuario','Usuario_controller::add_usuario');
$routes->post('login_usuario','Usuario_controller::login_usuario');


#CARRITO CONTROLLER (GET)
$routes->get('carrito','Carrito_controller::ver_carrito');
$routes->get('vaciar_carrito/(:segment)','Carrito_controller::vaciar_carrito/$1');
$routes->get('eliminar_item/(:any)','Carrito_controller::eliminar_item/$1');
$routes->get('modificar_cantidad/(:segment)/(:any)','Carrito_controller::modificar_cantidad/$1/$2');


#CARRITO CONTROLLER (POST)
$routes->post('agregar_carrito','Carrito_controller::agregar_carrito');


#VENTA CONTROLLER (GET)
$routes->get('ventas','Venta_controller::guardar_venta');
$routes->get('listar_ventas','Venta_controller::listar_ventas');
$routes->get('listar_detalle_venta/(:num)','Venta_controller::listar_detalle_venta/$1');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
