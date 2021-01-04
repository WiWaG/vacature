<?php

namespace App\Controllers;

use App\Libraries\View;
class HomeController {

    public function index()
    {
        return View::render('home.view');
    }
}