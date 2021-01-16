<?php

namespace app\controllers;

use app\lib\View;

class AdminController
{

    public function index()
    {
        return View::render('admin/main.view');
    }

}