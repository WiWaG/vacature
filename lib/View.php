<?php

namespace lib;

class View
{

    public static function render($view, array $vars = null)
    {
        require $_SERVER['DOCUMENT_ROOT'] . '/templates/' . $view . '.php';
    }

    public static function redirect($uri)
    {
        header("Location: " . $uri);
    }

}

