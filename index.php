<?php

use Core\App;
use Core\Database;

require "vendor/autoload.php";

// function exception_handler(Throwable $exception)
// {
//    echo "Uncaught exceptions: ", $exception->getMessage(), "\n";
// }
// set_exception_handler('exception_handler');
// $db = new Database();



$app = new App();

$router = $app->getRouter();
$container = $app->getContainer();



$container->bind(Database::class, function (): Database {
   return new Database();
});


require_once "./routes/web.php";

$uri = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];


$router->route($uri, $method);
