<?php
define('APP_ROOT', __DIR__.'/../');

require APP_ROOT . '/src/Ivdm/bootstrap.php';

$app = new \Slim\App($settings);


require APP_ROOT . '/src/Ivdm/Dependencies.php';
require APP_ROOT . '/src/Ivdm/CliRoutes.php';

$app->add(new \Ivdm\Middleware\CliRequest());

//php cliRequest.php /initPhononetDatabase GET




$app->run();