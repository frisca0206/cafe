<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// => default controller
$routes->get('dashboard', 'DashboardController::index',['as' => 'dashboard']);

$routes->get('/drink', 'DrinkController::index',['as' => 'drink']);
$routes->get('/drink/edit/(:num)', 'DrinkController::edit/$1',['as' => 'drink-edit']);
$routes->get('/drink/delete/(:num)', 'DrinkController::delete/$1',['as' => 'drink-delete']);
$routes->get('/drink/create', 'DrinkController::create',['as' => 'drink-create']);
$routes->post('/drink/store', 'DrinkController::store',['as' => 'drink-store']);
$routes->post('/drink/update', 'DrinkController::update',['as' => 'drink-update']);