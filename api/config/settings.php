<?php
return [
    'settings' => [
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false,
        'determineRouteBeforeAppMiddleware' => true,

        'logger' => [
            'name' => 'elitonluiz-api',
            'path' => dirname(__DIR__) . '/logs/api.log',
            'level' => \Monolog\Logger::DEBUG
        ],

        'db' => [
            'host' => "localhost",
            'user' => "root",
            'pass' => "root",
            'dbname' =>  "elitonluiz"
        ]
    ]
];