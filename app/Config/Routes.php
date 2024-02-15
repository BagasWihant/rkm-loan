<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->group('kredit', ['filter' => 'auth'], function($routes)
{
    $routes->get('cabang', 'Kredit::cabang');
    $routes->get('manajer', 'Kredit::manajer');
    $routes->get('spv', 'Kredit::spv');
    $routes->get('ao', 'Kredit::ao');
    $routes->get('pengajuan', 'Kredit::pengajuan');
    $routes->get('editpengajuan', 'Kredit::editpengajuan');
    $routes->get('pengawasan', 'Kredit::pengawasan');
});
$routes->get('user/profil', 'User::profil', ['filter' => 'auth']);
$routes->post('ajax/loaddata', 'Ajax::loaddata', ['filter' => 'auth']);
$routes->get('ajax/loaddata', 'Ajax::loaddata', ['filter' => 'auth']);
$routes->get('/register', 'Register::index', ['filter' => 'auth']);
$routes->post('/register/save', 'Register::save', ['filter' => 'auth']);
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');

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
