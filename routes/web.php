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
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('login1');
})->name("login");

Route::get('/request', function () {
    return view('request');
})->name("request");

Route::get('/paid', function () {
    return view('paid');
})->name("paid");

Route::get('/consult', function () {
    return view('consult');
})->name("consult");

