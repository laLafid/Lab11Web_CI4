<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->resource('post', ['except' => ['create', 'update', 'delete']]);
$routes->post('post', 'Api\\Post::create', ['filter' => 'apiauth']);
$routes->put('post/(:segment)', 'Api\\Post::update/$1', ['filter' => 'apiauth']);
$routes->delete('post/(:segment)', 'Api\\Post::delete/$1', ['filter' => 'apiauth']);
$routes->post('api/login', 'Api\Auth::login');