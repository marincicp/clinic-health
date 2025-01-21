<?php

use Http\Controllers\AuthController;


$router->get("/",  AuthController::class, "store");
