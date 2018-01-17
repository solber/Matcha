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

$app->run();