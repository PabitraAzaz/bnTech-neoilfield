<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/services', 'Home::services');


$routes->get('/gallery', 'Home::gallery');
$routes->get('/about-us', 'Home::about_us');
$routes->match(['get', 'post'], '/contact-us', 'Home::contact_us');








$routes->match(['get', 'post'], '/admin', 'Home::login');


$routes->group('admin/', function ($routes) {
    // $routes->match(['get', 'post'], '/', 'AdminController\LoginController::index');
    $routes->get('dashboard/', 'AdminController\Dashboard::index');


    $routes->group('products', function ($routes) {
        $routes->get('/', 'AdminController\ProductController::index');
        $routes->match(['get', 'post'], 'create/', 'AdminController\ProductController::create');
        // $routes->match(['get', 'post'], 'edit/(:num)', 'AdminController\CategoryController::edit/$1');
        $routes->get('delete/(:num)', 'AdminController\ProductController::delete/$1');
    });




    $routes->group('messages', function ($routes) {
        $routes->get('/', 'AdminController\Dashboard::message_list');
        $routes->get('delete/(:num)', 'AdminController\Dashboard::message_delete/$1');
    });




    // $routes->get('logout', 'AdminController\DashboardController::logout');
});
