<?php

use rd\skeleton\core\Router;
use rd\skeleton\core\ControlChecker;

define("BASE_PATH", dirname(__DIR__));
require_once BASE_PATH."/vendor/autoload.php";

$url = $_SERVER['REQUEST_URI'];

//Suppression du premier "/" de l'url
$url = explode("/", $url);
array_shift($url);

//url à utiliser
$url    = implode("/", $url);

$router = new Router($url);

$controlChecker = new ControlChecker($router, "rd\\skeleton\\controllers\\");
$controlChecker->check();





