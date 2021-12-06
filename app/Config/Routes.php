<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/catalogo/detalleLibro', 'Home::detalleLibro', ['filter' => 'authGuard']);

//RUTAS PARA PROBAR EL DISEÑO
$routes->get('/login', 'Home::login');

$routes->get('/admin', 'Home::admin', ['filter' => 'authGuard']);

//Categoria
$routes->get('/admin/categoria/listar', 'CategoriasController::adminlistarcategoria'); 
$routes->get('/admin/categoria/create', 'CategoriasController::admincrearcategoria');
$routes->post('/admin/categoria/guardar', 'CategoriasController::guardar');
$routes->post('/admin/categoria/actualizar', 'CategoriasController::actualizar');
$routes->get('/admin/categoria/edit/(:num)', 'CategoriasController::editar/$1');
$routes->get('borrar/(:num)', 'CategoriasController::borrar/$1');

//Autor
$routes->get('/admin/autor/listar', 'AutoresController::listarAutor');
$routes->get('/admin/autor/create', 'AutoresController::crearAutor');
$routes->get('/admin/autor/edit', 'AutoresController::editarAutor');
$routes->post('/admin/autor/guardar', 'AutoresController::guardarAutor');
$routes->get('/admin/autor/eliminar/(:num)', 'AutoresController::eliminarAutor/$1');
$routes->get('/admin/autor/editar/(:num)', 'AutoresController::editarAutor/$1');
$routes->post('/admin/autor/actualizar', 'AutoresController::actualizarAutor');

//Editorial
$routes->get('admin/editorial/listar', 'EditorialesController::index');
$routes->get('admin/editorial/create', 'EditorialesController::create');
$routes->post('admin/editorial/guardar', 'EditorialesController::guardar');
$routes->get('admin/editorial/borrar/(:num)', 'EditorialesController::borrar/$1');
$routes->get('admin/editorial/edit/(:num)', 'EditorialesController::edit/$1');
$routes->post('admin/editorial/actualizar', 'EditorialesController::actualizar');

//Libro
$routes->get('/catalogo', 'LibrosController::catalogo', ['filter' => 'authGuard']);
$routes->get('/admin/libro/listar', 'LibrosController::adminlistarlibro');
$routes->get('/admin/libro/create', 'LibrosController::admincrearlibro');
$routes->post('/admin/libro/guardar', 'LibrosController::adminguardarlibro');
$routes->get('/admin/libro/borrar/(:num)', 'LibrosController::adminborrarlibro/$1');
$routes->get('/admin/libro/editar/(:num)', 'LibrosController::admineditarlibro/$1');
$routes->post('/admin/libro/actualizar', 'LibrosController::adminactualizarlibro');

//Ejemplar
$routes->get('/admin/ejemplar/listar', 'EjemplarController::adminlistarejemplar');
$routes->get('/admin/ejemplar/create', 'EjemplarController::admincrearejemplar');
$routes->post('/admin/ejemplar/guardar', 'EjemplarController::adminguardarejemplar');
$routes->get('/admin/ejemplar/borrar/(:num)', 'EjemplarController::adminborrarejemplar/$1');
$routes->get('/admin/ejemplar/editar/(:num)', 'EjemplarController::admineditarejemplar/$1');
$routes->post('/admin/ejemplar/actualizar', 'EjemplarController::adminactualizarejemplar');

//Pruebas
$routes->get('/admin/ejemploejemplar/listar', 'EjemploController::adminlistarejemplo');
$routes->get('/admin/ejemploejemplar/create', 'EjemploController::admincrearejemplo');
$routes->post('/admin/ejemploejemplar/guardar', 'EjemploController::adminguardarejemplo');
$routes->get('admin/ejemploejemplar/borrar/(:num)', 'EjemploController::adminborrarejemplo/$1');
$routes->get('/admin/ejemploejemplar/editar/(:num)', 'EjemploController::admineditarejemplo/$1');
$routes->post('/admin/ejemploejemplar/actualizar', 'EjemploController::adminactualizarejemplo');

//Usuario
$routes->get('/admin/usuario/listar', 'Home::adminlistarusuario');
$routes->get('/admin/usuario/edit', 'Home::admineditarusuario');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

//Mis rutas
$routes->get('/signin', 'SigninController::index');
$routes->get('/signup', 'SignupController::index');
$routes->get('/catalogo', 'LibrosController::catalogo', ['filter' => 'authGuard']);

$routes->get('/catalogo/detalle', 'Home::detalleLibro', ['filter' => 'authGuard']);
