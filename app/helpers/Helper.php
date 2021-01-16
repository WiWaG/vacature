<?php

namespace app\helpers;

class Helper
{
    
    public static function isLoggedIn()
    {
        return isset($_SESSION) && 
            isset($_SESSION['user']) && 
            isset($_SESSION['user']['uid']) &&
            (int)$_SESSION['user']['uid'] > 0 ? true : false;
    }

    public static function getUserIdFromSession()
    {
        if (self::isLoggedIn()) {
            return (int)$_SESSION['user']['uid'];
        }

        return false;
    }

}