<?php
define('__ROOT__', dirname(__DIR__));

require __ROOT__ . '/vendor/autoload.php';

$settings = require_once __ROOT__ . '/src/settings.php';
$app = new \Slim\App($settings);
$app->add(\Src\Middleware\RouteDataHandler::class);

require_once __ROOT__ . '/src/dependencies.php';

require_once __ROOT__ . '/src/routes.php';

$app->run();