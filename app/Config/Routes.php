<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginController');
$routes->setDefaultMethod('login');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'LoginController::login');
$routes->get('logout', 'LoginController::logout');
$routes->group('home', static function ($routes) {
    $routes->get('/', 'Home::index');
});
$routes->group('penduduk', static function ($routes) {
    $routes->get('/', 'DataPendudukController::index');
    $routes->get('tambah', 'DataPendudukController::tambah');
    $routes->post('submit_tambah', 'DataPendudukController::submit_tambah');
    $routes->get('delete', 'DataPendudukController::delete_penduduk');
    $routes->get('edit', 'DataPendudukController::edit_penduduk');
    $routes->post('submit_edit', 'DataPendudukController::submit_edit');
    }
);

$routes->group('kartu_keluarga', static function ($routes) {
    $routes->get('/', 'DataKartuKeluargaController::index');
    $routes->get('tambah', 'DataKartuKeluargaController::tambah');
    $routes->post('submit_tambah', 'DataKartuKeluargaController::submit_tambah');
    $routes->get('delete', 'DataKartuKeluargaController::delete_kk');
    $routes->get('edit', 'DataKartuKeluargaController::edit_kk');
    $routes->post('submit_edit', 'DataKartuKeluargaController::submit_edit');
    }
);

$routes->group('periode_bansos', static function ($routes) {
    $routes->get('/', 'PeriodeBansosController::index');
    $routes->get('tambah', 'PeriodeBansosController::tambah');
    $routes->get('config_kriteria', 'PeriodeBansosController::config_kriteria');
    $routes->post('submit_kriteria', 'PeriodeBansosController::submit_kriteria');
    $routes->post('submit_tambah', 'PeriodeBansosController::submit_tambah');
    $routes->get('delete', 'PeriodeBansosController::delete_periode');
    $routes->get('edit', 'PeriodeBansosController::edit_periode');
    $routes->post('submit_edit', 'PeriodeBansosController::submit_edit');
    }
);

$routes->group('kriteria_bansos', static function ($routes) {
    $routes->get('/', 'KriteriaBansosController::index');
    $routes->get('tambah', 'KriteriaBansosController::tambah');
    $routes->post('submit_tambah', 'KriteriaBansosController::submit_tambah');
    $routes->get('delete', 'KriteriaBansosController::delete_kriteria');
    $routes->get('edit', 'KriteriaBansosController::edit_kriteria');
    $routes->post('submit_edit', 'KriteriaBansosController::submit_edit');
    }
);

$routes->group('login', static function ($routes) {
  $routes->get('/', 'LoginController::login');
  $routes->post('auth_login', 'LoginController::attemptLogin');
  $routes->get('logout', 'LoginController::logout');
});
$routes->group('user', static function ($routes) {
  $routes->get('/', 'UserController::login');
  $routes->get('profile', 'UserController::profile');
  $routes->post('submit_edit', 'UserController::submit_edit');
  $routes->post('change_password', 'UserController::change_password');
  $routes->get('change', 'UserController::change');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
