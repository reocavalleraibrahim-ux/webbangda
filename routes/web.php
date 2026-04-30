<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\BagianController;
use App\Http\Controllers\AgendaController;

Route::get('/', [MainController::class,'index']);
Route::get('/allBerita',[MainController::class,'allBerita']);
Route::get('/detailBerita/{id}',[MainController::class,'detailBerita']);
Route::get('/dok/{id}',[MainController::class,'dok']);
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout',[AuthController::class,'logout']);
Route::post('/authenticate',[AuthController::class,'authenticate']);
Route::get('/dashboard',[MainController::class,'dashboard'])->middleware('auth');
Route::resource('/slider',SliderController::class)->middleware('auth');
Route::resource('/berita',BeritaController::class)->middleware('auth');
Route::resource('/master',MasterController::class)->middleware('auth');
Route::resource('/kategori',KategoriController::class)->middleware('auth');
Route::resource('/dokumen',DokumenController::class)->middleware('auth');
Route::resource('/bagian',BagianController::class)->middleware('auth');
Route::resource('/agenda',AgendaController::class)->middleware('auth');