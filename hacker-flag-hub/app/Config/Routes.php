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
$routes->get('/', 'LoginController::index');
$routes->post('login', 'LoginController::login');
$routes->post('createAccount', 'LoginController::createAccount');
$routes->get('home', 'HomeController::index');
$routes->get('learn', 'LearnController::index');
$routes->get('problems', 'ProblemsController::index');
$routes->get('scoreboard', 'ScoreboardController::index');

// problems web 
$routes->get('problems/web/p1', 'ProblemsController::p1');
$routes->get('problems/web/p1/robots.txt', 'ProblemsController::robots');
$routes->get('problems/web/p1/saskme.html', 'ProblemsController::ans_page');
$routes->post('problems/checkAns', 'ProblemsController::checkAnswer');

$routes->get('problems/ter/p1', 'ProblemsController::p2');


$routes->post('scoreboard/getScore', 'ScoreboardController::getScore');

$routes->get('test', 'TestController::index');
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
