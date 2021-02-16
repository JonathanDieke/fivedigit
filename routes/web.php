<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PaymentController;
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




Route::middleware(['auth'])->group(function () {

    Route::get('/request_document',[ManagerController::class, 'getRequest'])->name('request');

    Route::post('/requested_document', [ManagerController::class, 'postRequest'])->name('requested');

    Route::post('/send_request_document/{document}', [ManagerController::class, 'sendRequest'])->name('sendRequest');
});


Route::get('/refresh_document', function () {
    return view('refresh');
})->name('refresh');

Route::post('/refresh_document', [ManagerController::class, 'postRefreshed'])->name('refreshed');


Route::post("/payment", [ManagerController::class, 'getPay'])->name('pay');
Route::post("/paid", [ManagerController::class, 'postPay'])->name('paid');




Route::get('/consult_document', [DocumentController::class, 'index'])->name('consult');
Route::post('/consult_document', [DocumentController::class, 'store'])->name('consulted');
