<?php 

$appConfig = require __DIR__ . '/../config/app.php';
date_default_timezone_set($appConfig['timezone']);
ini_set('display_errors', $appConfig['debug']);
ini_set('display_startup_errors', $appConfig['debug']);
error_reporting($appConfig['error_reporting']);