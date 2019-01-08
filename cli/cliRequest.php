<?php

use Ivdm\Helper\Cheater;

define('APP_ROOT', __DIR__.'/../');

require APP_ROOT . '/src/Ivdm/bootstrap.php';

$app = new \Slim\App($settings);


require APP_ROOT . '/src/Ivdm/Dependencies.php';
require APP_ROOT . '/src/Ivdm/CliRoutes.php';

$app->add(new \Ivdm\Middleware\CliRequest());

Cheater::setContainer($container);

error_reporting(E_ALL);

//php cliRequest.php /initPhononetDatabase GET

//php cliRequest.php /generateModelFromCsv GET 'filename=../docs/mappings.csv&target=../src/Ivdm/Models/Audio.php'
//php cliRequest.php /generateModelFromCsv GET 'filename=../docs/mappingsTrack.csv&target=../src/Ivdm/Alpha/Track.php'
//php cliRequest.php /generateModelFromCsv GET 'filename=../docs/mappingsTracks.csv&target=../src/Ivdm/Alpha/Tracks.php'

//php cliRequest.php /doDailyImport GET

//php cliRequest.php /doDailyExport GET



$app->run();