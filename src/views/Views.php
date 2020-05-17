<?php

use Testify\Router\Router;
use Testify\Router\Response;

$router = Router::getInstance();


$router->get('/', function($request) {
    return Response::fromView('pages/home.html');
});

$router->get('/simulation/etape-1', function($request) {
    return Response::fromView('pages/simu_1.html');
});

$router->get('/simulation/etape-2', function($request) {
    return Response::fromView('pages/simu_2.html');
});

$router->get('/simulation/etape-3', function($request) {
    return Response::fromView('pages/simu_3.html');
});

$router->get('/simulation/etape-4', function($request) {
    return Response::fromView('pages/simu_4.html');
});

$router->get('/simulation/etape-5', function($request) {
    return Response::fromView('pages/simu_5.html');
});

$router->get('/simulation/etape-6', function($request) {
    return Response::fromView('pages/simu_6.html');
});

$router->get('/simulation/conclusion', function($request) {
    return Response::fromView('pages/simu_conclusion.html');
});

$router->get('/404', function($request) {
    return Response::fromView('404.html', null, null, 404);
});
