<?php

namespace app\controllers;

use app\lib\View;

class ProfileController
{
    public function index()
    {
        if (isset($_SESSION) && isset($_SESSION['user'])) {
            return View::render('me.view');
        } else {
            header('Location: login');
        }
        
    }

    public function changeEmail()
    {

    }

}