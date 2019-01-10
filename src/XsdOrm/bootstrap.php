<?php

$loader = require APP_ROOT . '/vendor/autoload.php';
$loader->add('XsdOrm\\', APP_ROOT.'/src/');

require APP_ROOT.'/config/constants.php';

\XsdOrm\Helper\Factory::setLoader($loader);

$settings_slim = require APP_ROOT.'/config/slim.php';
$settings_app = require APP_ROOT.'/config/config.php';
$settings_app_local = require APP_ROOT.'/config/config_local.php';
$settings = array_replace_recursive($settings_slim, $settings_app, $settings_app_local);