<?php

namespace App\Controllers;

use App\Utils\database;

class AuthController extends database
{

    public function loginView()
    {
        return require "src/Views/thanks.php";

    }


    public function login()
    {
        // if already logged in redirect
        if( isset($_SESSION['id'])) {
          header('Location: /');
        }
            
        if (isset($_POST['email']) && $_POST['password']) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = database::query("SELECT * FROM login WHERE email=:email AND hash_password=:password", array(":email" => $email, ":password" => $password));
             if ($user) {
                $_SESSION['id'] = $user['id'];
                 return header('Location: /');
            }
            // user does not exist
            return header('Location: /register');
        }
        
        return header('Location: /login');
        // TODO if already logged in redirect
        // fetch from db if match $_POST add to session and redirect
        // if doesn't match redirect to register

//        var_dump($_POST);

    }

    public
    function registerView()
    {
        return require "src/Views/retry.php";
    }

    public
    function register()
    {
        // validate input types
        // check if user email already registered
        // create user and redirect to home
//        print_r($_POST);
        if (isset($_POST['Submit'])) {
            $email = $_POST['Email'];
            $password = $_POST['pwd'];
            $name = $_POST['Name'];
            if (!database::query("SELECT email FROM login WHERE email=:email", array(':email' => $email))) {
                if (strlen($name) >= 6 && strlen($name) <= 60) {
                    if (preg_match('/[a-zA-Z]+/', $name)) {
                        if (strlen($password) >= 8 && strlen($password) <= 64) {
                            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                database::query("INSERT INTO login VALUES ('',:name,:email,:hash_password)", array(':name' => $name, ':email' => $email, ':hash_password' => password_hash($password, PASSWORD_BCRYPT)));

                                echo 'success ';
                            } else {
                                echo 'this mail is invalid ';
                            }
                        } else {
                            echo 'password is invalid';
                        }
                    } else {
                        echo 'invalid name';
                    }
                } else {
                    echo 'name is invalid';

                }
            } else {
                echo 'this account already existed';

            }
        }

    }
}
//            return header("Location: /register");
