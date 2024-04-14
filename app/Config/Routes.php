<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/blogs', 'BlogController::showBlogs');
$routes->get('/blog/(:num)', 'BlogController::showblog/$1');
$routes->post('/blog', 'BlogController::createBlog');
