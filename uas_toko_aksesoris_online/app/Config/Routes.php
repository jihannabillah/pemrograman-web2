<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Public
$routes->get('/', 'Home::index');
$routes->get('/search', 'Home::search');
$routes->get('/cart', 'Home::cart');
$routes->get('/checkout', 'Home::checkout');
$routes->get('/submit', 'Home::submit');
$routes->get('/images/(:segment)', 'Home::image/$1');

service('auth')->routes($routes);

// Admin
$routes->group('admin', ['filter' => ['group:admin']], function($routes){
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('daftar-aksesoris', 'AdminController::daftarAksesoris');
    $routes->post('daftar-aksesoris', 'AdminController::createAksesoris');
    $routes->get('/admin/daftar-aksesoris/edit/(:num)', 'AdminController::daftarAksesorisEdit/$1');
    $routes->get('/admin/daftar-aksesoris/hapus', 'AdminController::daftarAksesorisHapus');

    $routes->get('/admin/transaksi', 'AdminController::transaksi');
    $routes->get('/admin/transaksi/ubah-status', 'AdminController::transaksiUbahStatus');
    $routes->get('/admin/transaksi/hapus', 'AdminController::transaksiHapus');

    $routes->get('/admin/pelanggan', 'AdminController::pelanggan');
    $routes->get('/admin/pelanggan/hapus', 'AdminController::pelangganHapus');
});