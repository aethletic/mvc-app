<?php 

$app->router()->get('/', function() use ($app) {
    $app->render('pages/index');
});