<?php

use Core\App;

require "vendor/autoload.php";


$app = new App();

$router = $app->getRouter();

require_once "./routes/web.php";

$uri = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];


$router->route($uri, $method);
