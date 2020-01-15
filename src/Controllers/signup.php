<?php


namespace App\Controllers;

use App\Utils\database;

class signup extends database
{
    public static function Signup()
    {
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