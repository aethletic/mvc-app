<?php 

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\ChromePHPHandler;

$app->mapOnce('logger', function () {
    $logConfig = require __DIR__ . '/../config/log.php';
    $logger = new Logger('app');
    $logger->pushHandler(new StreamHandler($logConfig['log_dir'], Logger::DEBUG));
    $logger->pushHandler(new ChromePHPHandler);
    return $logger;
});