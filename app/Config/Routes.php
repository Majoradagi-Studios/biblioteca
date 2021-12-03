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

//RUTAS PARA PROBAR EL DISEÑO
$routes->get('/login', 'Home::login');

$routes->get('/admin', 'Home::admin', ['filter' => 'authGuard']);

//Categorias
$routes->get('/admin/categoria/listar', 'CategoriasController::index');
$routes->get('/admin/categoria/create', 'CategoriasController::admincrearcategoria');
$routes->get('/admin/categoria/guardar', 'CategoriasController::guardar');
$routes->get('/admin/categoria/edit', 'CategoriasController::admineditarcategoria');

$routes->get('/admin/autor/listar', 'AutoresController::listarAutor');
$routes->get('/admin/autor/create', 'AutoresController::crearAutor');
$routes->get('/admin/autor/edit', 'AutoresController::editarAutor');
$routes->get('/admin/autor/guardar', 'AutoresController::guardar');

$routes->get('/admin/editorial/listar', 'Home::adminlistareditorial');
$routes->get('/admin/editorial/create', 'Home::admincreareditorial');
$routes->get('/admin/editorial/edit', 'Home::admineditareditorial');

$routes->get('/admin/ejemplar/listar', 'Home::adminlistarejemplar');
$routes->get('/admin/ejemplar/create', 'Home::admincrearejemplar');
$routes->get('/admin/ejemplar/edit', 'Home::admineditarejemplar');

$routes->get('/admin/libro/listar', 'Home::adminlistarlibro');
$routes->get('/admin/libro/create', 'Home::admincrearlibro');
$routes->get('/admin/libro/edit', 'Home::admineditarlibro');

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
$routes->get('/catalogo', 'LibrosController::index', ['filter' => 'authGuard']);
