<?php

namespace controllers;

use App\Models\UserModel;
use lib\View;
use lib\MySql;
class UserController extends Controller
{

    public function index()
    {
        if (isset($_SESSION) && isset($_SESSION['user'])) {
            echo "Yes!!!";
        } else {
            die('Not loged in');
        }
    }

    public function add()
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
        
    }

    /**
     * Archive a user record into the database
     */
    public function destroy(int $id)
    {

    }

}

