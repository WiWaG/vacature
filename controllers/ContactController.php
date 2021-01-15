<?php

namespace controllers;

use lib\View;

class ContactController
{
    public function index()
    {
        return View::render('contact/form.view');
    }

    public function store()
    {
        
    }
}