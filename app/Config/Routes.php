<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/admin', 'AdminController::index');
$routes->get('/login', 'AdminController::login');

$routes->get('/add-crate', 'BrandController::addCrate');