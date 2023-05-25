<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginAsociatesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Norris', function () {
    return view('welcome');
})->name('Norris');

Route::get('/register',[RegisterController::class ,'show'])->name('register');

Route::post('/register',[RegisterController::class ,'register']);

Route::get('/login',[LoginController::class ,'show'])->name('login');

Route::post('/login',[LoginController::class ,'login']);

Route::group(['middleware' => 'auth'], function () {Route::get('/home', function () {return view('homeNorris');})->name('home');
});
Route::get('/logout',[LogoutController::class ,'logout']);

Route::get('/app', function () {return view('layouts.appweb');});

Route::get('/asociados', function () {return view('asociados');})->name('asociados');

Route::get('/loginAsociados',[LoginAsociatesController::class ,'show'])->name('loginAsociados');

Route::post('/loginAsociados',[LoginAsociatesController::class ,'login']);

Route::get('/users', function () {
    return view('listadoPac');
});
