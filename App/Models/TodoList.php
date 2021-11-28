<?php

namespace Mardini\TodolistPhpMysql\Models;

use Mardini\TodolistPhpMysql\Config\Database;
use PDO;

class TodoList
{

    private static function getId(): int
    {
        $path = explode('/', $_SERVER['PATH_INFO']);
        $id  = intval($path[3]);

        return $id;
    }

    private static function getIscomplete(): int
    {
        $path = explode('/', $_SERVER['PATH_INFO']);
        $iscomplete  = intval($path[count($path) - 1]);

        return $iscomplete;
    }

    public static function display(): array
    {
        $connect = Database::getConnection();
        $query = 'SELECT * FROM todo_list';

        $datas = $connect->query($query);
        $models = $datas->fetchAll(PDO::FETCH_ASSOC);
        $connect = null;

        return $models;
    }

    public static function save()
    {
        $connect = Database::getConnection();
        $input = $_POST['input'];
        $query = "INSERT INTO todo_list(todo) VALUE(?)";

        $statement = $connect->prepare($query);
        $statement->execute([$input]);

        $connect = null;
    }

    public static function delete(): void
    {

        $connect = Database::getConnection();
        $query = "DELETE FROM todo_list WHERE id = ?";
        $id = self::getId();

        $statement = $connect->prepare($query);
        $statement->execute([$id]);

        $connect = null;
    }

    public static function update(): void
    {

        $connect = Database::getConnection();

        $id = self::getId();
        $iscomplete = self::getIscomplete();


        if ($iscomplete == 0) {

            $updateIscomplete = "UPDATE todo_list SET iscomplete = 1 WHERE id = ?";
            $statementUpdate = $connect->prepare($updateIscomplete);
            $statementUpdate->execute([$id]);

            $connect = null;

            return;
        }

        $updateIscomplete = "UPDATE todo_list SET iscomplete = 0 WHERE id = ?";
        $statementUpdate = $connect->prepare($updateIscomplete);
        $statementUpdate->execute([$id]);

        $connect = null;

        return;
    }
}
