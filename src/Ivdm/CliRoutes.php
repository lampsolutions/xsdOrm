<?php

$app->map(['GET'],
    '/initPhononetDatabase',
    'Ivdm\Controller\Cli\Database:initPhononetDatabase')->setName('initPhononetDatabase');

