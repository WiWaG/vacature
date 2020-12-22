<?php

namespace App\Controllers;

use App\Libraries\View;

class ProfileController
{
    
    public function index()
    {
        return View::render('me.view');
    }

}