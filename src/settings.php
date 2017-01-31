<?php

$settings = [
    'settings' => [
        'displayErrorDetails' => true,
        'render' => ['template_path' => __DIR__ . '/../template/'
        ],
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG
        ]
    ]
];
