<?php

namespace App\Controllers;

use App\Libraries\View;

class MauriceController
{
    public function index()
    {
        if (isset($_SESSION) && isset($_SESSION['user'])) {
            return View::render('maurice/home-maurice');
        } else {
            header('Location: login');
        }
    }
}