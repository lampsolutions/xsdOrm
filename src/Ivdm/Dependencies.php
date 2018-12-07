<?php

$container = $app->getContainer();

$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(
        APP_ROOT . 'templates/Bayernpartei',
        [
            'cache' => false,
            'debug' => true,
            'auto_reload' => true,
        ]
    );
    $view->addExtension(
        new \Slim\Views\TwigExtension(
            $container['router'],
            $container['request']->getUri()
        )
    );
    $view->addExtension(
        new Twig_Extension_Debug()
    );


    return $view;
};

$container['pdo'] = function ($container) {
    $cfg = $container->get('settings:mysql');
    $pdo = new \PDO($cfg['dsn'], $cfg['username'], $cfg['password'],
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query("SET SESSION sql_mode = 'NO_ENGINE_SUBSTITUTION'");
    return $pdo;
};

$container['orm'] = function ($container) {
    return new \Ivdm\Helper\Orm($container['pdo']);
};





