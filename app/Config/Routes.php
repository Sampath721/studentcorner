<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('Modules\Home\Controllers');
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
$routes->add('/', 'Home::index',['namespace' => 'Modules\Home\Controllers']);
$routes->add('/track_bus', 'Home::track_bus',['namespace' => 'Modules\Home\Controllers']);
$routes->add('/receive_chat_message', 'Home::receive_chat_message',['namespace' => 'Modules\Home\Controllers']);
$routes->add('/get_last_10_minutes_chat', 'Home::get_last_10_minutes_chat',['namespace' => 'Modules\Home\Controllers']);
$routes->add('/exit', 'Home::exit',['namespace' => 'Modules\Home\Controllers']);
$routes->add('/signup', 'Home::signup',['namespace' => 'Modules\Home\Controllers']);
$routes->add('/login', 'Home::login',['namespace' => 'Modules\Home\Controllers']);
$routes->add('/previous_notes', 'Home::previous_notes',['namespace' => 'Modules\Home\Controllers']);
$routes->add('/books', 'Home::books',['namespace' => 'Modules\Home\Controllers']);
$routes->add('/view_product', 'Home::view_product',['namespace' => 'Modules\Home\Controllers']);








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
