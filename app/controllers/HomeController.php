<?php

namespace app\controllers;

use app\lib\View;

class HomeController {

    public function index()
    {
        return View::render('home.view');
    }
}