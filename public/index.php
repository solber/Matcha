<?php

require '../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true //enlevé a la fin du projet pour avoir la page 404
    ]
]);

require '../app/container.php';

$app->get('/', \App\Controllers\PageController::class . ':home')->setName('home');

$app->get('/login', \App\Controllers\PageController::class . ':login')->setName('login');
$app->post('/login', \App\Controllers\PageController::class . ':postlogin');

$app->get('/register', \App\Controllers\PageController::class . ':register')->setName('register');
$app->post('/register', \App\Controllers\PageController::class . ':postregister');

$app->get('/profile', \App\Controllers\PageController::class . ':profile')->setName('profile');
$app->post('/profile', \App\Controllers\PageController::class . ':postprofile');

$app->get('/suggestion', \App\Controllers\PageController::class . ':suggestion')->setName('suggestion');
$app->post('/suggestion', \App\Controllers\PageController::class . ':suggestion');

$app->run();