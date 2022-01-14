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
    return view('front/f_home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('/series/list_peserta_negara', [App\Http\Controllers\SeriesController::class, 'listpesertanegara']);
Route::get('/protokol/video', [App\Http\Controllers\ProtokolController::class, 'video']);

Route::get('/mdcountry', [App\Http\Controllers\MdCountryController::class, 'index']);
Route::get('/mdcountry/add', [App\Http\Controllers\MdCountryController::class, 'add']);
Route::POST('/mdcountry/add', [App\Http\Controllers\MdCountryController::class, 'add_ac']);
Route::get('/mdcountry/edit/{id}', [App\Http\Controllers\MdCountryController::class, 'edit']);
Route::POST('/mdcountry/edit/', [App\Http\Controllers\MdCountryController::class, 'edit_ac']);
Route::get('/mdcountry/delete/{id}', [App\Http\Controllers\MdCountryController::class, 'delete_ac']);

Route::get('/mdatlet', [App\Http\Controllers\MdAtletController::class, 'index']);
Route::get('/mdatlet/add', [App\Http\Controllers\MdAtletController::class, 'add']);
Route::post('/mdatlet/add', [App\Http\Controllers\MdAtletController::class, 'add_ac']);
Route::get('/mdatlet/edit/{id}', [App\Http\Controllers\MdAtletController::class, 'edit']);
Route::POST('/mdatlet/edit/', [App\Http\Controllers\MdAtletController::class, 'edit_ac']);

Route::get('/mdatlet/delete/{id}', [App\Http\Controllers\MdAtletController::class, 'delete_ac']);