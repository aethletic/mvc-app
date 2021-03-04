<?php 

use Session\Session;

$app->mapOnce('session', new Session);
$app->session()->start([
    'cookie_lifetime' => 86400,
]);
