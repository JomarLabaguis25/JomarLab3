<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');
$routes->get('/login', 'UserController::login');
//$routes->post('/www', 'UserController::processLogin');
$routes->get('/forgotpass', 'UserController::forgotpass');
$routes->get('/register', 'UserController::register');
$routes->get('/welcome_message', 'Home::index');
//$routes->post('/login', 'UserController::save');

$routes->get('/', 'AdminController::index');
$routes->get('/www', 'AdminController::index');
$routes->get('/accounts', 'AdminController::accounts');
$routes->get('/notification', 'AdminController::notification');
$routes->get('/connections', 'AdminController::connections');

$routes->group('products', function($routes) {
    $routes->get('/crud', 'ProductController::crud'); // Assuming you have an index method for listing products
    $routes->add('crud', 'ProductController::crud'); // Assuming you have a create method for showing the form
    $routes->post('save', 'ProductController::save/$id'); // Route for saving (create/update) product
});
$routes->get('/crud', 'AdminController::crud');
//$routes->post('/crud', 'AdminController::save');
//$routes->get('/login', 'UserController::login');
//$routes->get('/forgotpass', 'UserController::forgotpass');
//$routes->get('/register', 'UserController::register');


$routes->get('/about', 'UserController::about');
$routes->get('/contact', 'UserController::contact');
$routes->get('/gallery', 'UserController::gallery');
$routes->get('/news', 'UserController::news');
$routes->get('/testimonial', 'UserController::testimonial');

$routes->get('/product1', 'UserController::product1');
$routes->get('/product2', 'UserController::product2');
$routes->get('/product3', 'UserController::product3');
$routes->get('/product4', 'UserController::product4');

$routes->get('/readmore1', 'UserController::readmore1');
$routes->get('/readmore2', 'UserController::readmore2');
$routes->get('/readmore3', 'UserController::readmore3');

$routes->get('/about1', 'UserController::about1');