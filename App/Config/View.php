<?php

namespace Mardini\TodolistPhpMysql\Config;

class View
{
    public static function render(string $view, $models): void
    {
        require __DIR__ . "/../Views/$view.php";
    }
}
