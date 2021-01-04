<?php

use Illuminate\Http\Request;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/request_document', function () {
    return view('request');
})->name('request');

Route::post('/requested_document', function (Request $request) {
    dd($request->code);
})->name('requested');

Route::get('/refresh_document', function () {
    return view('refresh');
})->name('refresh');

Route::get('/consult_document', function () {
    return view('consult');
})->name('consult');
