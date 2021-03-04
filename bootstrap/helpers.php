<?php 

use Container\Container as App;

if (! function_exists('app')) {
    /**
     * @return \Container\Container
     */
    function app() {
        return App::getInstance();
    }
}

if (! function_exists('db')) {
    /**
     * @param string|null $connection 
     * @return \Illuminate\Database\Capsule\Manager
     */
    function db(?string $connection = null) {
        return $connection ? App::db()->connection($connection) : App::db();
    }
}

if (! function_exists('render')) {
    /**
     * @param string $template
     * @param array $params
     * @return string Html markup
     */
    function render(string $template, array $params = []) {
        return App::render($template, $params);
    }
}

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

function sendRequest($url, $fields = [], $method = 'get', $config = [])
{
    $fields = http_build_query($fields);

    // http://php.net/manual/ru/function.curl-setopt.php
    $_config = [
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36',
        CURLOPT_COOKIEFILE => __DIR__ . '/../storage/app/request/cookie.txt',
        CURLOPT_COOKIEJAR =>  __DIR__ . '/../storage/app/request/cookie.txt',
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HEADER => '',
        CURLOPT_TIMEOUT => 30,
        CURLOPT_AUTOREFERER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
    ];

    $method = strtolower($method);
    
    if ($method == 'post') {
        $_config[CURLOPT_POSTFIELDS] = $fields;
        $_config[CURLOPT_POST] = true;
    }

    foreach ($config as $key => $value) {
        $_config[$key] = $value;
    }

    $curl = curl_init();
    curl_setopt_array($curl, $_config);

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
}

if (! function_exists('session')) {
    /**
     * @return \Session\Session
     */
    function session() {
        return new \Session\Session;
    }
}
