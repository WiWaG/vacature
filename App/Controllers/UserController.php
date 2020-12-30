<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Libraries\View;
use App\Libraries\MySql;
class UserController extends Controller
{

    public function index()
    {
        
    }

    /**
     * Store a user record into the database
     */
    public function store()
    {
        
    }

    /**
     * Updates a user record into the database
     */
    public function update()
    {
        $data = [
            'first_name' => "Bernard",
            'last_name' => "Bondin",
            'email' => "bernard@codegorilla.nl",
            'password' => "q3234234q3213^^!^w23123",
            'birthday' => "1990-12-31",
            'created' => date("Y-m-d H:i:s"),
        ];

        UserModel::update($data, 1);
    }

    /**
     * Archive a user record into the database
     */
    public function destroy(int $id)
    {

    }

}

