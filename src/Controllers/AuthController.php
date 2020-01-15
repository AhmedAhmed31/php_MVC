<?php

namespace App\Controllers;

class AuthController
{

    public function loginView()
    {

        require_once 'src/Views/thanks.php';
    }

    public function login()
    {

        login::logging();

    }

    public function registerView()
    {
        return require "src/Views/retry.php";
    }


    public function register()
    {
        // validate input types
        // check if user email already registered
        // create user and redirect to home

        signup::Signup();

    }
}
