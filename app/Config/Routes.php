<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//landingpage
$routes->get('/', 'Home::index');

//user
$routes->get('/login', 'Login::login');
$routes->post('/login/process', 'Login::process');

$routes->get('/register', 'Register::register');
$routes->post('/register/process', 'Register::process');

$routes->get('/logout', 'Login::logout');
$routes->get('/reset-session', 'Checkout::resetSession');


//user
$routes->get('/home', 'User::home');
$routes->get('/menu', 'User::menu');
$routes->get('/cart', 'User::cart');
$routes->post('/cart/add', 'User::addToCart');  // Memastikan penggunaan POST
$routes->get('/aboutus', 'User::aboutus');
$routes->get('/contackus', 'User::contackus');
$routes->get('/menudetail/(:num)', 'User::menudetail/$1'); // Menggunakan parameter angka
// app/Config/Routes.php
$routes->get('/checkout', 'User::checkout');
$routes->post('/checkout/process', 'Checkout::process');
$routes->post('/checkout/confirm', 'Checkout::confirm');
$routes->get('/checkout/result/(:num)', 'Checkout::result/$1');


//admin
$routes->get('/admin', 'Admin::index');
$routes->get('/daftarmenu', 'DaftarMenu::index');
$routes->get('/users', 'DaftarUser::index');
$routes->get('/kategori', 'KategoriMenu::index');
$routes->get('/sales', 'SalesController::index');
$routes->get('/sales/details/(:num)', 'SalesController::details/$1');
$routes->get('/sales/export', 'SalesController::exportToExcel');
$routes->get('/sales/getSalesData/(:any)', 'SalesController::getSalesData/$1');


//tambah
$routes->get('/daftarmenu/create', 'DaftarMenu::create');
$routes->post('/daftarmenu/tambah', 'DaftarMenu::tambah');
$routes->get('/kategori/create', 'KategoriMenu::create');
$routes->post('/kategori/tambah', 'KategoriMenu::tambah');
//edir
$routes->get('/daftarmenu/update/(:num)', 'DaftarMenu::update/$1');
$routes->post('/daftarmenu/edit/(:num)', 'DaftarMenu::edit/$1');
$routes->get('/daftaruser/update/(:num)', 'DaftarUser::update/$1');
$routes->post('/daftaruser/edit/(:num)', 'DaftarUser::edit/$1');
//delete
$routes->get('/daftarmenu/delete/(:num)', 'DaftarMenu::delete/$1');
$routes->get('/daftaruser/delete/(:num)', 'DaftarUser::delete/$1');
$routes->get('/kategori/delete/(:num)', 'KategoriMenu::delete/$1');
