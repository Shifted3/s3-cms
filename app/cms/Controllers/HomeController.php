<?php

namespace App\CMS\Controllers;

use S3\Controllers\Controller;

class HomeController extends Controller
{
    public static function index($request, $response, $arguments)
    {
        return view($response, 'pages.index');
    }
}
