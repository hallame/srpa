<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/','welcome')->name('home');

Route::view('/register','auth.register',['countries' => [
    'USA' => '+1',
    'Royaume-Uni' => '+44',
    'France' => '+33'
    ]])->name('register');

Route::get('/logout',fn () =>
    view('auth.login')
)->name('logout')->middleware('auth');

Route::view('/login','auth.login')->name('login');