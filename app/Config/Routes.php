<?php

namespace Config;

$routes = Services::routes();
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
  require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('HomeController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->group('home', function ($routes) {
  $routes->get('/', 'HomeController::index', ['namespace' => 'App\Controllers']);
});
$routes->post('/subscription', 'HomeController::subscription');

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
  require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
