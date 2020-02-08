<?php

namespace App\Utils;

use PDO;

class database
{
    public static $host = '127.0.0.1';
    public static $dbname = 'magebit';
    public static $username = 'root';
    public static $password = '';

    public static function query($query, $params = array())
    {
        $stmt = self::connect()->prepare($query);
        $stmt->execute($params);
        $data = $stmt->fetchAll();
        return $data;
    }

    private static function connect()
    {

        $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname . ';', self::$username, self::$password);

        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }


}