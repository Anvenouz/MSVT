<?php
namespace MSVT;

use MSVT\Controllers\AboutController;
use MSVT\Controllers\ActivitiesServicesController;
use MSVT\Controllers\ReservationController;
use MSVT\Router;
use MSVT\Controllers\HomeController;

$router = new Router();

// Homes
$router->addRoute('/', HomeController::class, 'index');
// Contact
$router->addRoute('/contact', HomeController::class, 'contact');
// Galerie
$router->addRoute('/galerie', HomeController::class, 'galerie');


// About
$router->addRoute('/terms', AboutController::class, 'terms');
$router->addRoute('/privacy', AboutController::class, 'privacy');
$router->addRoute('/historique', AboutController::class, 'historique');


// Services
$router->addRoute('/activites_scolaires', ActivitiesServicesController::class, 'index');
$router->addRoute('/stages_CN', ActivitiesServicesController::class, 'stagesCN');
$router->addRoute('/visites', ActivitiesServicesController::class, 'visites');
$router->addRoute('/anniversaires', ActivitiesServicesController::class, 'anniversaires');
$router->addRoute('/location', ActivitiesServicesController::class, 'location');

// Reservations
$router->addRoute('/reservation', ReservationController::class, 'index');

//Errors
$router->addRoute('/notFound', HomeController::class, 'error404');

$uri = $_SERVER['REQUEST_URI'];

try {
  $router->dispatch($uri);
}catch (\Exception $e) {
//  header("HTTP/1.1 404 Not Found");
  http_response_code(404);
  $router->dispatch('/notFound');
}
