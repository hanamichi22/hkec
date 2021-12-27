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

Route::get('/mdcountry', [App\Http\Controllers\MdCountryController::class, 'index']);
Route::get('/mdcountry/add', [App\Http\Controllers\MdCountryController::class, 'add']);

Route::get('/mdatlet', [App\Http\Controllers\MdAtletController::class, 'index']);
