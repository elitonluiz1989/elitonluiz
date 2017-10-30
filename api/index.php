<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function() {
    return 'foi';
});

$app->post('/api/mail', function() {
    return 'foi';
});

$app->run();