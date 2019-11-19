<?php

//Autoload
$loader = require 'vendor/autoload.php';

//Instanciando objeto
$app = new \Slim\Slim(array(
    'templates.path' => 'templates'
));

$app->get('/status/', function () use ($app) {
    (new \controllers\client($app))->getStatus();
});

$app->post('/valida_numero/', function () use ($app) {
    (new \controllers\client($app))->validaNumero();
});

$app->get('/', function () use ($app) {
    $app->render('index.html');
});

//Rodando aplicação
$app->run();
