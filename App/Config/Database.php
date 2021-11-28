<?php

namespace Mardini\TodolistPhpMysql\Config;

use PDO;

class Database
{

    private static string $user = 'root';
    private static string $pass = '';

    public static function getConnection(): PDO
    {
        return new PDO("mysql:host=localhost;dbname=my_todo_list", self::$user, self::$pass);
    }
}
