<?php 

namespace App\Core;

use Container\Container as App;

class Controller 
{
    protected $app;
    protected $request;
    protected $response;
    protected $db;
    protected $session;
    protected $cookie;

    public function __construct()
    {
        $this->app = App::getInstance();
        $this->request = $this->app->request();
        $this->response = $this->app->response();
        $this->db = $this->app->db();
        $this->session = $this->app->session();
        $this->cookie = $this->app->cookie();
    }
}