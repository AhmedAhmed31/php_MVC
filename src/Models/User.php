<?php

namespace App\Models;

use App\Utils\database;

class User
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

                            } else {
                                loadView('retry');

                            }
                        }
                    }
                }
            } else {
                echo 'your email used';
            }
        }

    }


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

                loadView('retry');

            } else {

                if ($user) {
                    if (password_verify($password, $hash)) {
                        $_SESSION['loggedin'] = TRUE;
                        $_SESSION['email'] = $_POST['email'];
                        $_SESSION['id'] = $user[0]["Id"];
                        return header('Location: /profile');

                    }

                }

            }
        }
        return header('Location: /login');

    }


    public static function findByemail($email)
    {
        $user = database::query("SELECT * FROM login LEFT JOIN user_data ON login.id = user_data.user_id WHERE login.email=:email", array(":email" => $email));
        return $user;
    }


    public static function update($id)
    {

        if (isset($_POST['update'])) {
            $age = $_POST['age'];
            $Bio = $_POST['bio'];
            if (database::query("SELECT * FROM user_data WHERE user_id=:id ", array(':id' => $id))) {
                database::query('UPDATE  user_data SET age=:age,bio=:bio WHERE user_id=:id', array(':age' => $age, ':bio' => $Bio, ':id' => $id));

            } else {
                database::query("INSERT INTO user_data  VALUES ('',:bio,:user_id,:age)   ", array(':age' => $age, ':bio' => $Bio, ':user_id' => $id));

            }
        }
    }

}
