<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/services', 'Home::services');



$routes->get('/services/(:num)', 'Home::single_services/$1');


$routes->get('/gallery', 'Home::gallery');
$routes->get('/about-us', 'Home::about_us');
$routes->match(['get', 'post'], '/contact-us', 'Home::contact_us');




$routes->match(['get', 'post'], '/admin', 'Home::login');






$routes->group('admin/', function ($routes) {
    // $routes->match(['get', 'post'], '/', 'AdminController\LoginController::index');
    $routes->get('dashboard/', 'AdminController\Dashboard::index');


    $routes->group('services', function ($routes) {
        $routes->get('/', 'AdminController\ServicesController::index');
        $routes->match(['get', 'post'], 'create/', 'AdminController\ServicesController::create');

        $routes->match(['get', 'post'], 'edit/(:num)', 'AdminController\ServicesController::edit/$1');

        $routes->get('delete/(:num)', 'AdminController\ServicesController::delete/$1');
    });


    $routes->group('messages', function ($routes) {
        $routes->get('/', 'AdminController\Dashboard::message_list');
        $routes->get('delete/(:num)', 'AdminController\Dashboard::message_delete/$1');
    });




    // $routes->get('logout', 'AdminController\DashboardController::logout');
});
