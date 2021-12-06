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

//??
$routes->get('/', 'Home::index');

//Iniciar sesión
$routes->get('/signin', 'UsuariosController::index');

//Catalogo
$routes->get('/catalogo', 'LibrosController::catalogo', ['filter' => 'authGuard']);
$routes->get('/catalogo/detalle/(:num)', 'LibrosController::detalleLibro/$1', ['filter' => 'authGuard']);
$routes->get('/catalogo/buscar/(:num)', 'LibrosController::busqueda/$1', ['filter' => 'authGuard']);

//Rutas Admin
//Admin
$routes->get('/admin', 'Home::admin', ['filter' => 'adminGuard']);

//Categoria
$routes->get('/admin/categoria/listar', 'CategoriasController::adminlistarcategoria', ['filter' => 'adminGuard']); 
$routes->get('/admin/categoria/create', 'CategoriasController::admincrearcategoria', ['filter' => 'adminGuard']);
$routes->post('/admin/categoria/guardar', 'CategoriasController::guardar', ['filter' => 'adminGuard']);
$routes->post('/admin/categoria/actualizar', 'CategoriasController::actualizar', ['filter' => 'adminGuard']);
$routes->get('/admin/categoria/edit/(:num)', 'CategoriasController::editar/$1', ['filter' => 'adminGuard']);
$routes->get('borrar/(:num)', 'CategoriasController::borrar/$1', ['filter' => 'adminGuard']);

//Autor
$routes->get('/admin/autor/listar', 'AutoresController::listarAutor', ['filter' => 'adminGuard']);
$routes->get('/admin/autor/create', 'AutoresController::crearAutor', ['filter' => 'adminGuard']);
$routes->get('/admin/autor/edit', 'AutoresController::editarAutor', ['filter' => 'adminGuard']);
$routes->post('/admin/autor/guardar', 'AutoresController::guardarAutor', ['filter' => 'adminGuard']);
$routes->get('/admin/autor/eliminar/(:num)', 'AutoresController::eliminarAutor/$1', ['filter' => 'adminGuard']);
$routes->get('/admin/autor/editar/(:num)', 'AutoresController::editarAutor/$1', ['filter' => 'adminGuard']);
$routes->post('/admin/autor/actualizar', 'AutoresController::actualizarAutor', ['filter' => 'adminGuard']);

//Editorial
$routes->get('admin/editorial/listar', 'EditorialesController::index', ['filter' => 'adminGuard']);
$routes->get('admin/editorial/create', 'EditorialesController::create', ['filter' => 'adminGuard']);
$routes->post('admin/editorial/guardar', 'EditorialesController::guardar', ['filter' => 'adminGuard']);
$routes->get('admin/editorial/borrar/(:num)', 'EditorialesController::borrar/$1', ['filter' => 'adminGuard']);
$routes->get('admin/editorial/edit/(:num)', 'EditorialesController::edit/$1', ['filter' => 'adminGuard']);
$routes->post('admin/editorial/actualizar', 'EditorialesController::actualizar', ['filter' => 'adminGuard']);

//Libro
$routes->get('/admin/libro/listar', 'LibrosController::adminlistarlibro', ['filter' => 'adminGuard']);
$routes->get('/admin/libro/create', 'LibrosController::admincrearlibro', ['filter' => 'adminGuard']);
$routes->post('/admin/libro/guardar', 'LibrosController::adminguardarlibro', ['filter' => 'adminGuard']);
$routes->get('/admin/libro/borrar/(:num)', 'LibrosController::adminborrarlibro/$1', ['filter' => 'adminGuard']);
$routes->get('/admin/libro/editar/(:num)', 'LibrosController::admineditarlibro/$1', ['filter' => 'adminGuard']);
$routes->post('/admin/libro/actualizar', 'LibrosController::adminactualizarlibro', ['filter' => 'adminGuard']);

//Ejemplar
$routes->get('/admin/ejemplar/listar', 'EjemplarController::adminlistarejemplar', ['filter' => 'adminGuard']);
$routes->get('/admin/ejemplar/create', 'EjemplarController::admincrearejemplar', ['filter' => 'adminGuard']);
$routes->post('/admin/ejemplar/guardar', 'EjemplarController::adminguardarejemplar', ['filter' => 'adminGuard']);
$routes->get('/admin/ejemplar/borrar/(:num)', 'EjemplarController::adminborrarejemplar/$1', ['filter' => 'adminGuard']);
$routes->get('/admin/ejemplar/editar/(:num)', 'EjemplarController::admineditarejemplar/$1', ['filter' => 'adminGuard']);
$routes->post('/admin/ejemplar/actualizar', 'EjemplarController::adminactualizarejemplar', ['filter' => 'adminGuard']);

//Usuario super
$routes->get('/admin/usuario/listar', 'UsuariosController::adminlistarusuario', ['filter' => 'superGuard']);
$routes->get('/admin/usuario/create', 'UsuariosController::admincrearusuario', ['filter' => 'superGuard']);
$routes->post('/admin/usuario/guardar', 'UsuariosController::adminguardarusuario', ['filter' => 'superGuard']);
$routes->get('admin/usuario/borrar/(:num)', 'UsuariosController::adminborrarusuario/$1', ['filter' => 'superGuard']);

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
