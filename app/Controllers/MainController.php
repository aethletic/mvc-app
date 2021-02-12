<?php 

namespace App\Controllers;

use App\Core\Controller;
use Container\Container as App;

class MainController extends Controller
{
    public function index()
    {
        echo App::render('pages/index');
    }
}