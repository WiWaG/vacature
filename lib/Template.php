<?php

namespace lib;

class Template
{

    public static function render($view, array $vars = null)
    {
        require $_SERVER['DOCUMENT_ROOT'] . '/templates/' . $template . '.php';
    }

    public static function redirect($uri)
    {
        header("Location: " . $uri);
    }

}