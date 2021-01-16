<?php

namespace app\controllers;

class Controller
{

    protected function getRequest()
    {
        return $_SERVER;
    }
    
}