<?php 

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app->router()->get('/', 'MainController@index');
$app->router()->get('/hello/:all', function (Request $request, Response $response, $name) {
    dd("Hello {$name}");
});