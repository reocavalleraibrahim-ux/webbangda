<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
});
Route::get('/login',[AuthController::class,'login']);
Route::post('/authenticate',[AuthController::class,'authenticate']);
