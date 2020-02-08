<?php

namespace App\Controllers;

use App\Utils\database;

class Profile extends database
{

    public function addData()
    {
        $id=$_SESSION['id'];
        if (isset($_POST['Submit'])) {
            $Age = $_POST['age'];
            $bio = $_POST['bio'];
            database::query("UPDATE  user_data SET ('',:Age,:bio,:user_id) WHERE user_id=:id", array(':Age' => $Age, ':bio' => $bio,':user_id'=>$_SESSION['id']));
        }
    }
}
