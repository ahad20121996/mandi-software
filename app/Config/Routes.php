<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->get('/', 'HomeController::index');

// $routes->group('admin', function request)

$routes->get('/admin', 'AdminController::index');
$routes->get('/login', 'AdminController::login');
$routes->get('/profile', 'AdminController::showProfile');

$routes->get('/add-crate', 'BrandController::addCrate');
$routes->get('/crate-list', 'BrandController::crateList');

$routes->get('/add-customer', 'CustomerController::addCustomer');
$routes->get('/customer-list', 'CustomerController::customerList');

$routes->get('/add-dealer', 'DealerController::addDealer');
$routes->get('/dealer-list', 'DealerController::dealerList');

$routes->get('/add-user', 'UserController::addUser');
$routes->get('/user-list', 'UserController::userList');

$routes->get('/crate-reports', 'ReportsController::showCrate');
$routes->get('/customer-reports', 'ReportsController::showCustomer');
$routes->get('/dealer-reports', 'ReportsController::showDealer');

