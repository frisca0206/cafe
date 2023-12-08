<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function() {
    return view('landing-page');
});

$routes->get('/home', 'HomeController::index',['as' => 'home']);
$routes->get('/login', 'LoginController::index',['as' => 'login']);

// => default controller
$routes->get('dashboard', 'DashboardController::index',['as' => 'dashboard']);

$routes->get('/drink', 'DrinkController::index',['as' => 'drink']);
$routes->get('/drink/edit/(:num)', 'DrinkController::edit/$1',['as' => 'drink-edit']);
$routes->get('/drink/delete/(:num)', 'DrinkController::delete/$1',['as' => 'drink-delete']);
$routes->get('/drink/create', 'DrinkController::create',['as' => 'drink-create']);
$routes->post('/drink/store', 'DrinkController::store',['as' => 'drink-store']);
$routes->post('/drink/update', 'DrinkController::update',['as' => 'drink-update']);


$routes->get('/food', 'FoodController::index',['as' => 'food']);
$routes->get('/food/edit/(:num)', 'FoodController::edit/$1',['as' => 'food-edit']);
$routes->get('/food/delete/(:num)', 'FoodController::delete/$1',['as' => 'food-delete']);
$routes->get('/food/create', 'FoodController::create',['as' => 'food-create']);
$routes->post('/food/store', 'FoodController::store',['as' => 'food-store']);
$routes->post('/food/update', 'FoodController::update',['as' => 'food-update']);


$routes->get('/order', 'OrderController::index',['as' => 'order']);
$routes->get('/order/edit/(:num)', 'OrderController::edit/$1',['as' => 'order-edit']);
$routes->get('/order/delete/(:num)', 'OrderController::delete/$1',['as' => 'order-delete']);
$routes->get('/order/create', 'OrderController::create',['as' => 'order-create']);
$routes->post('/order/store', 'OrderController::store',['as' => 'order-store']);
$routes->post('/order/update', 'OrderController::update',['as' => 'order-update']);


$routes->get('/category', 'CategoryController::index',['as' => 'category']);
$routes->get('/category/edit/(:num)', 'CategoryController::edit/$1',['as' => 'category-edit']);
$routes->get('/category/delete/(:num)', 'CategoryController::delete/$1',['as' => 'category-delete']);
$routes->get('/category/create', 'CategoryController::create',['as' => 'category-create']);
$routes->post('/category/store', 'CategoryController::store',['as' => 'category-store']);
$routes->post('/category/update', 'CategoryController::update',['as' => 'category-update']);