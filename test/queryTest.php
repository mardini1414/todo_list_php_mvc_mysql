<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Mardini\TodolistPhpMysql\Config\Database;

$query = 'SELECT todo FROM todo_list';

$getdata = new PDO('mysql:host=localhost;dbname=my_todo_list', 'root', '');
$model = $getdata->query($query);

foreach ($model as $value) {
    var_dump($value['tod']);
}
