<?php

use Mardini\TodolistPhpMysql\Controllers\HomeController;
use Mardini\TodolistPhpMysql\Controllers\TestController;
use Mardini\TodolistPhpMysql\Routes\Router;

require_once __DIR__ . '/../../vendor/autoload.php';

Router::add('GET', '/', HomeController::class, 'display', []);
Router::add('POST', '/', HomeController::class, 'save', []);
Router::add('GET', '/delete/id/([0-9]*)/iscomplete/([0-1])', HomeController::class, 'delete', []);
Router::add('GET', '/update/id/([0-9]*)/iscomplete/([0-1])', HomeController::class, 'update', []);

Router::run();
