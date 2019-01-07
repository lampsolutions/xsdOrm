<?php
return [
    'settings' => [
        'displayErrorDetails' => true,
        'logger' => [
            'name' => 'slim-app',
            'path' => APP_ROOT . 'logs/'.date("Y-m-d").'-app.log',
        ],
    ],
];
