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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
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

// Ilham : Menambahkan Controller
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->get('/register', 'Register::index');
// --Ilham : Menambahkan Controller

$routes->group('dashboard', static function ($routes) {
// Adib : Menambahkan Controller
    $routes->get('/', 'Dasboard::index');
    $routes->get('users', 'Dashboard::user');
    $routes->get('admin', 'Dashboard::admin');

    $routes->group('pengingat', static function ($routes) {
        $routes->get('penjadwalan', 'Dashboard::penjadwalan');
        $routes->get('data_kegiatan', 'Dashboard::dataKegiatan');
    });

    $routes->group('kepanitiaan', static function ($routes) {
        $routes->get('sk', 'Dashboard::sk');
        $routes->get('formating', 'Dashboard::formating');
    });
// --Adib : Menambahkan Controller

// Verlando : Menambahkan Controller
    $routes->group('laporan', static function ($routes) {
        $routes->get('desain_web', 'Dashboard/Laporan::desainWeb');
        $routes->get('pemrograman_mobile', 'Dashboard/Laporan::pemrogramanMobile');
        $routes->get('ui_ux', 'Dashboard/Laporan::uiUx');
        $routes->get('ctf', 'Dashboard/Laporan::ctf');
    });

    $routes->group('sertifikasi', static function ($routes) {
        $routes->get('desain_web', 'Dashboard/Sertifikasi::desainWeb');
        $routes->get('pemrograman_mobile', 'Dashboard/Sertifikasi::pemrogramanMobile');
        $routes->get('ui_ux', 'Dashboard/Sertifikasi::uiUx');
        $routes->get('ctf', 'Dashboard/Sertifikasi::ctf');
    });
//--Verlando : Menambahkan Controller

// Theo : Menambahkan Controller
    $routes->group('chart', static function ($routes) {
        $routes->get('desain_web', 'Dashboard/Chart::desainWeb');
        $routes->get('pemrograman_mobile', 'Dashboard/Chart::pemrogramanMobile');
        $routes->get('ui_ux', 'Dashboard/Chart::uiUx');
        $routes->get('ctf', 'Dashboard/Chart::ctf');
    });

    $routes->get('data_mitra', 'Dashboard::dataMitra');

    $routes->get('setting', 'Dashboard::setting');
//--Theo : Menambahkan Controller
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
