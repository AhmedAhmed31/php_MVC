<?php

namespace App\Controllers;

use App\Utils\database;
use mysql_xdevapi\Exception;

class HomeController
{
    public function index()
    {
        //        if (isset($_SESSION['user'])) {
        return loadView("view");
//        }
//        // TODO: extract this to helpers
//        return header("Location: /login");

    }

    public function profile()
    {

        if (isset($_SESSION['email'])) {
            $user = database::query("SELECT * FROM login LEFT JOIN user_data ON login.id = user_data.user_id WHERE login.email=:email", array(":email" => $_SESSION['email']));

            return loadView("userPage",$user[0]);

        }
    }

    public function update()
    {

        $id=$_SESSION['id'];
        var_dump($id);

        if (isset($_POST['Submit'])) {
            $Age = $_POST['age'];
            $bio = $_POST['bio'];
            try {
                database::query("UPDATE  user_data SET :Age=$Age,:bio=$bio,user_id= WHERE :user_id=$id", array(':Age' => $Age, ':bio' => $bio,':user_id'=>$_SESSION['id']));

            }
            catch (Exception $e){
                var_dump($e);
            }
        }
    }
}