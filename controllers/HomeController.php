<?php

namespace controllers;

use lib\Template;
class HomeController {

    public function index()
    {
        return View::render('home.view');
    }
}