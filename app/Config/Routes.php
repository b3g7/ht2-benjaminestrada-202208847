<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/nivelesacademicos', 'NivelesAcademicosController::index');

$routes->get('ciudadanos', 'CiudadanosController::index');
$routes->get('/ciudadanos/create', 'CiudadanosController::create');
$routes->post('/ciudadanos/store', 'CiudadanosController::store');
$routes->get('/ciudadanos/edit/(:num)', 'CiudadanosController::edit/$1');
$routes->post('/ciudadanos/update/(:num)', 'CiudadanosController::update/$1');
$routes->get('/ciudadanos/delete/(:num)', 'CiudadanosController::delete/$1');

$routes->get('/municipios', 'MunicipiosController::index');
$routes->get('/municipios/crear', 'MunicipiosController::crear');
$routes->post('/municipios/guardar', 'MunicipiosController::guardar');
$routes->get('municipios/editar/(:num)', 'MunicipiosController::editar/$1');
$routes->post('/municipios/actualizar/(:num)', 'MunicipiosController::actualizar/$1');
$routes->get('/municipios/eliminar/(:num)', 'MunicipiosController::eliminar/$1');


$routes->get('/departamentos', 'DepartamentosController::index');
$routes->get('/departamentos/crear', 'DepartamentosController::crear');
$routes->post('/departamentos/guardar', 'DepartamentosController::guardar');
$routes->get('/departamentos/editar/(:num)', 'DepartamentosController::editar/$1');
$routes->post('/departamentos/actualizar', 'DepartamentosController::actualizar');
$routes->get('/departamentos/eliminar/(:num)', 'DepartamentosController::eliminar/$1');

$routes->get('/regiones', 'RegionesController::index');
$routes->get('/regiones/crear', 'RegionesController::crear');
$routes->post('/regiones/guardar', 'RegionesController::guardar');
$routes->get('/regiones/editar/(:num)', 'RegionesController::editar/$1');
$routes->post('/regiones/actualizar/(:num)', 'RegionesController::actualizar/$1');
$routes->get('/regiones/eliminar/(:num)', 'RegionesController::eliminar/$1');


