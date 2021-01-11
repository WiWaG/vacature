<?php

namespace App\Middleware;

class CheckLogin
{

    public $isLoggedIn = false;

    public function __construct()
    {
        $this->isLoggedIn = isset($_SESSION) && isset($_SESSION['user']);
    }

    public function redirectIfNotLoggedIn()
    {
        header('location: login');
    }

}