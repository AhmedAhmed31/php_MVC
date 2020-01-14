<?php

namespace App\Models;

// TODO add IModel interface
class User
{
    public $name;
    public $email;
    public $password;
    private $tableName = "users";

    public function getTableName()
    {
        return $this->tableName;
    }
}
