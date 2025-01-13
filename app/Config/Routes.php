<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// routes.php - Konfigurasi rute untuk aplikasi CI4 Sicepot

// Halaman awal
$routes->get('/', 'HomeController::index');

// Halaman formulir pilihan pemohon
$routes->get('/formulir', 'FormController::praperdim');

// Halaman formulir dewasa
$routes->get('/formulir/dewasa', 'FormController::dewasa');

// Halaman formulir anak
$routes->get('/formulir/anak', 'FormController::anak');

// Tambahkan rute lain sesuai kebutuhan jika ada nantinya.


$routes->get('/formulir/dewasa', 'FormController::dewasa');
$routes->get('/formulir/anak', 'FormController::anak');


$routes->post('formulir/anak', 'FormController::saveAnak');
$routes->post('formulir/dewasa', 'FormController::saveDewasa');


$routes->get('/formulir/print_dewasa/(:num)', 'FormController::printDewasaAuto/$1');
// $routes->get('/formulir/print_anak/(:num)', 'FormController::printAnakAuto/$1');









