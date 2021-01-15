<?php

namespace controllers;

use lib\View;

class AdminController
{

    public function index()
    {
        return View::render('admin/main.view');
    }

}