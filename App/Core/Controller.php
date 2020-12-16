<?php 

namespace App\Core;

use Container\Container as App;

class Controller 
{
    protected $app;

    public function __call($method, $parameters)
    {
        $this->app = App::getInstance();
        call_user_func_array($this->{$method}, $parameters);
    }
}