<?php 

use Gt\Cookie\CookieHandler;

$app->mapOnce('cookie', new CookieHandler($_COOKIE));