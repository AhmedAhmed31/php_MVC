<?php

namespace App\Controllers;

use App\Models\User;

class HomeController
{
    public function index()
    {
        return loadView("view");
    }

    public function profile()
    {

        if (isset($_SESSION['email'])) {
            $user = User::findbyemail();
            return loadView("userPage", $user[0]);

        }
    }

    public function update()
    {
        User::update();
    }


}