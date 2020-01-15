<?php

namespace App\Controllers;

use App\Utils\database;

class login extends database
{

    public static function logging()
    {

        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            // $user = database::query("SELECT * FROM login WHERE email=:email AND hash_password=:password", array(":email" => $email, ":hash_password" => '$password'));
            if (database::query("SELECT email FROM login WHERE email=:email", array(":email" => $email))) {
                $hash = database::query("SELECT hash_password FROM login WHERE email=:email", array(":email" => $email))[0]['hash_password'];
                if (password_verify($password, $hash)) {
                    return header('Location: /login');

                }
                if (isset($_POST['logout'])) {
                    return header('Location:/');
                }

            } else {
                return header('Location:/');

            }
        }
    }
}