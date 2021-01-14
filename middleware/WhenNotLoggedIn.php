<?php

namespace middleware;

use lib\View;

class WhenNotLoggedin
{

    private $isLoggedIn = false;

    public function __construct()
    {
        $this->isLoggedIn = isset($_SESSION) && isset($_SESSION['user']);

        $this->redirect();
    }

    private function redirect()
    {
        if (!$this->isLoggedIn) {
            View::redirect('login');
        }
    }
}