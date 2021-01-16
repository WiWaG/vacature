<?php

namespace app\lib;

class Template
{

    public static function render($view, array $vars = null)
    {
        require $_SERVER['DOCUMENT_ROOT'] . '/views/' . $template . '.php';
    }

    public static function redirect($uri)
    {
        header("Location: " . $uri);
    }

}