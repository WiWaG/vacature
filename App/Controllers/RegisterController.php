<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\MySql;
use App\Models\UserModel;

class RegisterController
{

    public function index()
    {
        return View::render('register.view');
    }

    public function store()
    {
        if (UserModel::exists($_REQUEST['email']) === true)
        {
            return json_encode([
                'success' => false,
                'message' => "This user(name) has already been taken.",
            ]);
        }

        // check if passwords are equal
        if ($_REQUEST['password'] != $_REQUEST['password_2'])
        {
            return json_encode([
                'success' => false,
                'message' => "Passwords don't match."
            ]);
        } else {
            // create password hash and set required fields
            $data = [
                'first_name' => $_REQUEST['first_name'],
                'last_name'  => $_REQUEST['last_name'],
                'email'      => $_REQUEST['email'],
                'password'   => password_hash($_REQUEST['password'], PASSWORD_DEFAULT),
                'role'       => $_REQUEST['role'] = 1,
                'created_by' => $_REQUEST['created_by'] = 1,
                'created'    => $_REQUEST['created'] = date('Y-m-d H:i:s'),
            ];
            
            $data['id'] = UserModel::store($data);

            UserModel::setUserSession($data);

            $msg = new \Plasticbrain\FlashMessages\FlashMessages();
            $msg->info('Welcome <strong>' . $data['first_name'] . '</strong>!');

            return json_encode([
                'success'  => true,
                'message'  => "Ok :-)",
                'redirect' => "home"
            ]);
        }
    }

}