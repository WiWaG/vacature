<?php

namespace controllers;

use lib\View;

class UielementsController {

    public function index()
    {
        return View::render('ui-elements.view');
    }
}