<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcomeVA');
});

Route::get('/login', function () {
    return view('authentication.login');
});

Route::get('/register',[App\Http\Controllers\AuthController::class, 'showRegister'])->name('validateForm.user');

Route::post('/register',[App\Http\Controllers\AuthController::class, 'validateForm'])->name('validate.user');

