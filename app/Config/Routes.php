<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::saveRegister');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::checkLogin');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/add-mood', 'Mood::index');
$routes->post('/add-mood', 'Mood::save');
$routes->get('/history', 'Journal::timeline');
$routes->get('/resources', 'Resource::index');
$routes->get('/logout', 'Auth::logout');