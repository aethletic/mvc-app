<?php 

namespace App\Controllers;

use App\Core\Controller;
use Container\Container as App;

class MainController extends Controller
{
    public static function index()
    {
        App::render('pages/index');
    }
}