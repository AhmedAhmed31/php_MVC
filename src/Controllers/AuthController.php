<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{

    public function loginView()
    {
        loadView("retry");
    }

    public function login()
    {

        User::logging();

    }

    public function registerView()
    {
        loadView("thanks");
    }


    public function register()
    {
        User::Signup();
        return header('Location: /register');

    }
}
