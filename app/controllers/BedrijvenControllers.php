<?php

namespace app\controllers;

use app\lib\View;

class BedrijvenController {

    public function bedrijven()
    {
        return View::render('bedrijven.view');
    }
}