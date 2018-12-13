<?php

$app->map(['GET'],
    '/initPhononetDatabase',
    'Ivdm\Controller\Cli\Database:initPhononetDatabase')->setName('initPhononetDatabase');

$app->map(['GET'],
    '/doDailyImport',
    'Ivdm\Controller\Cli\Import:doDailyImport')->setName('doDailyImport');

$app->map(['GET'],
    '/generateModelFromCsv',
    'Ivdm\Controller\Cli\GenerateModel:generateModelFromCsv')->setName('generateModelFromCsv');