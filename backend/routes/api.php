<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get("/adduser",[UserController::class,"createuser"]);
Route::post("/authenticate",[UserController::class,"authenticateuser"]);
Route::post("/getuser/{id}",[UserController::class,"getuser"]);