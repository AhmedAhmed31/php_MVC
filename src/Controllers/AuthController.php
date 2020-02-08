<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{

    public function loginView()
    {
        loadView("thanks");
    }

    public function login()
    {

        User::logging();

    }

    public function registerView()
    {
        loadView("retry");
    }


    public function register()
    {
        User::Signup();
    }
}
