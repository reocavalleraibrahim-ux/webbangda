<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AgendaApi;
use App\Http\Controllers\API\ApbdApi;

Route::prefix('v1')->group(function(){
    Route::resource('/agenda',AgendaApi::class);
    Route::resource('/apbd',ApbdApi::class);
});