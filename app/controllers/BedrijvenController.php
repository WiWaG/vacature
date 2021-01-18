<?php

namespace app\controllers;

use app\lib\View;

class BedrijvenController {

    public function index()
    {
        return View::render('bedrijven.view');
    }
}