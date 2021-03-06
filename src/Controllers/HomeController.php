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
        return header('Location: /');
    }

    public function update()
    {
        $id = $_SESSION['id'];
        User::update($id);
        return header('Location:/profile');
    }
public function logout(){
        if(isset($_POST['logout'])) {
            unset($_SESSION['id']);
            unset($_SESSION['email']);
            return header('Location: /');
        }
}

}