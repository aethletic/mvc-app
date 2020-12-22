<?php 

namespace App\Controllers;

use App\Core\Controller;
use Container\Container as App;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function index(Request $request, Response $response)
    {
        App::render('pages/index');
    }
}