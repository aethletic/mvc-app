<?php 

use Chipslays\Router\Router;

$app->mapOnce('router', new Router);

$app->map('run', fn () => $app->router()->run());