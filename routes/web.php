<?php

use lib\Route;
use app\controllers\HomeController;

Route::get("/", [HomeController::class,"index"]);

Route::get("/dia1", [HomeController::class,"dia1"]);

Route::dispatch();

?>