<?php

use Container\Container as App;

require __DIR__ . '/bootstrap/common.php';

require __DIR__ . '/vendor/autoload.php';

$app = App::getInstance();

require __DIR__ . '/bootstrap/configs.php';
require __DIR__ . '/bootstrap/session.php';
require __DIR__ . '/bootstrap/cookie.php';
require __DIR__ . '/bootstrap/views.php';
require __DIR__ . '/bootstrap/database.php';
require __DIR__ . '/bootstrap/logger.php';
require __DIR__ . '/bootstrap/http.php';
require __DIR__ . '/bootstrap/helpers.php';
require __DIR__ . '/bootstrap/router.php';
require __DIR__ . '/routes/web.php';

$app->run();
