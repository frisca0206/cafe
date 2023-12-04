<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// => default controller
$routes->get('dashboard', 'DashboardController::index',['as' => 'dashboard']);