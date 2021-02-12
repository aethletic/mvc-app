<?php 

use Session\Session;

$app->mapOnce('session', new Session);
$app->session()->start([
    'cache_expire' => 1440,
]);