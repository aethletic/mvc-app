<?php 

$app->router()->get('/', 'App\Controllers\MainController@index');

$app->router()->get('/hello/{name}', function ($name) {
    dd("Hello {$name}");
});