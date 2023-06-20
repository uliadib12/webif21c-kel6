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
service('auth')->routes($routes);

$routes->get('/', 'Home::index');
$routes->post('login-v1', 'Auth::login');

$routes->get('event/(:num)','EventPage::index');

$routes->group('dashboard', ['filter' => 'group:admin,superadmin'], static function ($routes) {
    $routes->get('/', 'Dashboard::index');
    $routes->get('users', 'Dashboard::user');
    $routes->get('admin', 'Dashboard::admin');

    $routes->group('pengingat', static function ($routes) {
        $routes->get('penjadwalan', 'Dashboard::pengingat_penjadwalan');
        $routes->get('data-kegiatan', 'Dashboard::pengingat_dataKegiatan');
    });

    $routes->group('kepanitiaan', static function ($routes) {
        $routes->get('sk', 'Dashboard::kepanitiaan_sk');
        $routes->get('panitia', 'Dashboard::kepanitiaan_panitia');
    });

    $routes->group('laporan', static function ($routes) {
        $routes->get('desain-web', 'Dashboard/Laporan::desainWeb');
        $routes->get('pemrograman-mobile', 'Dashboard/Laporan::pemrogramanMobile');
        $routes->get('ui-ux', 'Dashboard/Laporan::uiUx');
        $routes->get('ctf', 'Dashboard/Laporan::ctf');
    });


    $routes->group('chart', static function ($routes) {
        $routes->get('desain-web', 'Dashboard::chart_desainWeb');
        $routes->get('pemrograman-mobile', 'Dashboard::chart_pemrogramanMobile');
        $routes->get('ui-ux', 'Dashboard::chart_uiUx');
        $routes->get('ctf', 'Dashboard::chart_ctf');
    });

    $routes->get('sertifikasi', 'Dashboard::sertifikasi');

    $routes->get('data-mitra', 'Dashboard::dataMitra');

    $routes->get('setting', 'Dashboard::setting');
});

$routes->group('profile', ['filter' => 'group:user,admin,superadmin'], static function ($routes) {
    $routes->get('/', 'User\Profile::index');
    $routes->post('update-user', 'User\Profile::updateUser');
    $routes->post('update-profile', 'User\Profile::updateProfile');
    $routes->post('update-profile-picture', 'User\Profile::updateProfilePicture');
});

$routes->group('kegiatan', ['filter' => 'group:admin,superadmin'], static function ($routes) {
    $routes->post('add', 'Event\Kegiatan::addData');
    $routes->post('edit', 'Event\Kegiatan::editData');
    $routes->post('delete', 'Event\Kegiatan::deleteData');
});

$routes->group('penjadwalan', ['filter' => 'group:admin,superadmin'], static function ($routes) {
    $routes->post('add', 'Pengingat\Penjadwalan::addData');
    $routes->post('edit', 'Pengingat\Penjadwalan::editData');
    $routes->post('delete', 'Pengingat\Penjadwalan::deleteData');
});


$routes->group('data-mitra', ['filter' => 'group:admin,superadmin'], static function ($routes) {
    $routes->post('add', 'DataMitra\Mitra::addData');
    $routes->post('edit', 'DataMitra\Mitra::editData');
    $routes->post('delete', 'DataMitra\Mitra::deleteData');
});

$routes->group('utils', static function ($routes) {
    $routes->post('get-migrate', 'Utils\MigrateController::getMigrate');
    $routes->post('migrate', 'Utils\MigrateController::migrate');
    $routes->post('rollback', 'Utils\MigrateController::rollback');
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