<?php

$app->map(['GET'],
    '/initDatabase',
    'XsdOrm\Controller\Cli\Database:initDatabase')->setName('initDatabase');

$app->map(['GET'],
    '/doDailyImport',
    'XsdOrm\Controller\Cli\Import:doDailyImport')->setName('doDailyImport');


$app->map(['GET'],
    '/doDailyExport',
    'XsdOrm\Controller\Cli\Export:doDailyExport')->setName('doDailyExport');

$app->map(['GET'],
    '/generateModelFromCsv',
    'XsdOrm\Controller\Cli\GenerateModel:generateModelFromCsv')->setName('generateModelFromCsv');


$app->any('/',
    'XsdOrm\Controller\Cli\Index:index')->setName('default');