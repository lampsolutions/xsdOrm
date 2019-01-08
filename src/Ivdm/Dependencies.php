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

$container['generalRepository'] = $container->factory(function ($container) {
    return new \Ivdm\Repository\GeneralRepository($container['pdo']);
});

$container['productAType'] = $container->factory(function () {
    return new \Ivdm\Phononet\Products\ProductAType();
});
$container['tartworkpicturetype'] = $container->factory(function () {
    return new \Ivdm\Phononet\TArtworkPictureType();
});

$container['tracks'] = $container->factory(function () {
    return new \Ivdm\Phononet\Tracks();
});

$container['track'] = $container->factory(function () {
    return new \Ivdm\Phononet\Track;
});

/**
 * @param \Slim\Container $c
 * @return \Monolog\Logger
 */
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], Monolog\Logger::DEBUG));
    return $logger;
};





