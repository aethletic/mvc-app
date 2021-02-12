<?php 

use Jenssegers\Blade\Blade;

$viewConfig = require __DIR__ . '/../config/view.php';
$app->mapOnce('view', new Blade($viewConfig['templates_dir'], $viewConfig['cache_dir']));

$app->view()->directive('app_name', function () use ($appConfig) {
    $name = $appConfig['app_name'];
    return "<?php echo with('$name'); ?>";
});

$app->map('render', function ($template, $params = []) use ($app) {
    echo $app->view()->render($template, $params);
});