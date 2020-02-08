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
            $email = $_SESSION['email'];
            $user = User::findbyemail($email);
            return loadView("userPage", $user[0]);

        }
    }

    public function update()
    {
        $id = $_SESSION['id'];
        User::update($id);
        header('Location:/profile');
    }


}