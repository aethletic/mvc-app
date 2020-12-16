<?php

use Bramus\Router\Router;
use Jenssegers\Blade\Blade;
use Container\Container;

require __DIR__ . '/vendor/autoload.php';

session_start();

$app = Container::getInstance();

$config = require __DIR__ . '/config/app.php';
$app->set('config.app', $config);

ini_set('display_errors',$config['debug']);
ini_set('display_startup_errors', $config['debug']);
error_reporting(E_ALL);

$app->mapOnce('view', new Blade(__DIR__ . '/resources/views', __DIR__ . '/storage/views'));

$app->map('render', function ($template, $params = []) use ($app) {
    echo $app->view()->render($template, $params);
});

/** router */
$app->mapOnce('router', fn() => new Router());
$app->map('run', fn() => $app->router()->run());

require __DIR__ . '/routes/web.php';

