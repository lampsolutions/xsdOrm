<?php

error_reporting(E_ALL);


use XsdOrm\Helper\Factory;

define('APP_ROOT', __DIR__.'/../');

require APP_ROOT . '/src/XsdOrm/bootstrap.php';

$app = new \Slim\App($settings);


/**
 * defines $container
 */
require APP_ROOT . '/src/XsdOrm/Dependencies.php';
require APP_ROOT . '/src/XsdOrm/CliRoutes.php';

$app->add(new \XsdOrm\Middleware\CliRequest());

/**
 * custom notFoundHandler for CLI
 *
 * @param $c
 * @return Closure
 */
$container['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        return $response->withStatus(404)
            ->withHeader('Content-Type', 'text/html')
            ->write('Page not found');
    };
};


/**
 * Singelton to access Container when are are to lazy doing proper DI
 */
Factory::setContainer($container);




$app->run();