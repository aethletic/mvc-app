<?php 

// https://symfony.com/doc/current/components/http_foundation.html

use Container\Container as App;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app->mapOnce('request', Request::createFromGlobals());
$app->mapOnce('response', new Response);

if (! function_exists('request')) {
    /**
     * @return \Symfony\Component\HttpFoundation\Request
     */
    function request() {
        return App::request();
    }
}

if (! function_exists('response')) {
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    function response() {
        return App::response();
    }
}