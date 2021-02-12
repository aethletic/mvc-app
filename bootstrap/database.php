<?php 

use Illuminate\Database\Capsule\Manager;

$app->mapOnce('db', function () use ($app) {
    $capsule = new Manager;
    $capsule->addConnection(require __DIR__ . '/../config/database.php');
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
});