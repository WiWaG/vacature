<?php

namespace app\controllers;

use app\lib\View;

class UielementsController {

    public function index()
    {
        return View::render('ui-elements.view');
    }
}