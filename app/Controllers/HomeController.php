<?php
namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class HomeController
{

    function index(Request $request, Response $response)
    {
        return 'Home Controller';
    }
}
