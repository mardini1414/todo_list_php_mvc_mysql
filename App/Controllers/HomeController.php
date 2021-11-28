<?php

namespace Mardini\TodolistPhpMysql\Controllers;

use Mardini\TodolistPhpMysql\Config\View;
use Mardini\TodolistPhpMysql\Models\TodoList;

class HomeController
{
    public function display(): void
    {
        $datas = TodoList::display();
        $models = array_reverse($datas, false);
        View::render('Home', $models);
    }

    public function save(): void
    {
        TodoList::save();
        $this->display();
    }

    public function delete(): void
    {
        TodoList::delete();
        $this->display();
    }

    public function update(): void
    {
        TodoList::update();
        $this->display();
    }
}
