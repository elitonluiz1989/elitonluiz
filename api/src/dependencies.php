<?php
$container = $app->getContainer();

$container['logger'] = function($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new \Monolog\Logger($settings['name']);
    $file_handler = new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']);

    $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
    $logger->pushHandler($file_handler);

    return $logger;
};

$container['db'] = function($c) {
    $settings = $c->get('settings')['db'];

    $pdoQuery = "mysql:host={$settings['host']};";
    $pdoQuery .= "dbname={$settings['dbname']}";

    $pdo = new PDO($pdoQuery, $settings['user'], $settings['pass']);
    $pdo->setAttribute(PDO::ATR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJECT);

    return $pdo;
};