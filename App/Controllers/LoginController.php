<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\MySql;

class LoginController
{

    public function __construct($function = null)
    {
        if (!empty($function)) {
            if (method_exists(get_class(), $function))
            {
                $this->$function();
            }
        }
    }

    /**
     * Return the login view or,
     * when there's already a login session (user), then
     * redirect to he home page
     */
    public function index()
    {
        if (isset($_SESSION['user'])) {
            return View::redirect("home");
        }

        return View::render('login.view');
    }

    /**
     * Check user credentials
     * This is a Ajax POST
     */
    public function login()
    {
        // $securityIssue = decryptToken($_REQUEST['crf_token'], $_SESSION['token']) === false;

        if (isset($_REQUEST['email']) && isset($_REQUEST['password']))
        {
            $sql = "SELECT * FROM `users` WHERE `email`='" . $_REQUEST['email'] . "'";
            $res = MySql::query($sql)->fetch();
            if ($res !== false)
            {
                if (password_verify($_REQUEST['password'], $res['password']))
                {
                    $this->setUserSession($res);

                    return json_encode([
                        'success'  => true,
                        'message'  => "Succesfull loged in.",
                        'redirect' =>  ""
                    ]);
                } else {
                    return json_encode([
                        'success' => false,
                        'message' => "Username and/or password incorrect"
                    ]);
                }
            }
        }
    }

    public function logout()
    {
        session_destroy();

        return View::redirect("home");
    }

    /**
     * Write user data to SESSION
     */
    private function setUserSession($user) : void
    {
        $_SESSION['user'] = [
            'uid'        => $user['id'],
            'first_name' => $user['first_name'],
            'insertion'  => $user['insertion'],
            'last_name'  => $user['last_name'],
            'full_name'  => $user['first_name'] . (!empty($user['insertion']) ? $user['insertion'] : "") . " " . $user['last_name'],
        ];
    }

}