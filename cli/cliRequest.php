<?php
define('APP_ROOT', __DIR__.'/../');

require APP_ROOT . '/src/Ivdm/bootstrap.php';

$app = new \Slim\App($settings);


require APP_ROOT . '/src/Ivdm/Dependencies.php';
require APP_ROOT . '/src/Ivdm/CliRoutes.php';

$app->add(new \Ivdm\Middleware\CliRequest());

error_reporting(E_ALL);

//php cliRequest.php /initPhononetDatabase GET

//php cliRequest.php /generateModelFromCsv GET 'filename=../docs/mappings.csv&target=../src/Ivdm/Models/Audio.php'
//php cliRequest.php /generateModelFromCsv GET 'filename=../docs/mappingsTrack.csv&target=../src/Ivdm/Models//Track.php'



$app->run();