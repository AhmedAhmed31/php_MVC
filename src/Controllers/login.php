<?php

namespace App\Controllers;

use App\Utils\database;

class login extends database
{

    public static function logging()
    {
        $err = "";
        if (isset($_POST['login'])) {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $user = database::query("SELECT * FROM login WHERE email=:email", array(":email" => $email));
            $hash = database::query("SELECT hash_password FROM login WHERE email=:email", array(":email" => $email))[0]['hash_password'];
            if (empty($email)) {
                $err .= "Email is empty<br>";
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $err .= "Email is not valid<br>";
                }
            }

            if (empty($password)) {
                $err .= "Password is empty<br>";
            }

            if (!empty($err)) {

                // there are errors
                echo("<p>" . $err . "</p>");

            } else {

                if ($user) {
                    if (password_verify($password, $hash)) {
                        $_SESSION['loggedin'] = TRUE;
                        $_SESSION['email'] = $_POST['email'];
                        $_SESSION['id'] = $user[0]["Id"];
                        return header('Location: /profile');

                    }
                    else{
                        unset($_SESSION['name']);
                        return header('Location:/');
                    }

                }
                else {
                    return header('Location:/');
                }

            }
//        return header('Location: /login');
        }
    }
}