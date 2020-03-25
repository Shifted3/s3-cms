<?php

namespace App\CMS\Controllers;

use S3\Controllers\BaseController;

class HomeController extends BaseController
{
    public static function index()
    {
        return view('pages.index');
    }
}
