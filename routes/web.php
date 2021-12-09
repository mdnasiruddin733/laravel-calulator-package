<?php

use Illuminate\Support\Facades\Route;
use Webpane\Nestedset\Http\Controllers\NestedsetController;
Route::get("/test",[NestedsetController::class,"index"]);