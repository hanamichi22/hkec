<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FhomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MdSponsorController;

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

// Route::get('/', function () {
//     return view('front/f_home');
// });

Route::get('/', [App\Http\Controllers\FhomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/praeventdanpromosi/{kategori}', [App\Http\Controllers\FhomeController::class, 'praeventdanpromosi']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('/series/list_peserta_negara', [App\Http\Controllers\SeriesController::class, 'listpesertanegara']);
Route::get('/protokol/video', [App\Http\Controllers\ProtokolController::class, 'video']);

Route::get('/mdcountry', [App\Http\Controllers\BackendController\MdCountryController::class, 'index']);
Route::get('/mdcountry/add', [App\Http\Controllers\BackendController\MdCountryController::class, 'add']);
Route::POST('/mdcountry/add', [App\Http\Controllers\BackendController\MdCountryController::class, 'add_ac']);
Route::get('/mdcountry/edit/{id}', [App\Http\Controllers\BackendController\MdCountryController::class, 'edit']);
Route::POST('/mdcountry/edit/', [App\Http\Controllers\BackendController\MdCountryController::class, 'edit_ac']);
Route::get('/mdcountry/delete/{id}', [App\Http\Controllers\BackendController\MdCountryController::class, 'delete_ac']);

Route::get('/mdatlet', [App\Http\Controllers\BackendController\MdAtletController::class, 'index']);
Route::get('/mdatlet/add', [App\Http\Controllers\BackendController\MdAtletController::class, 'add']);
Route::post('/mdatlet/add', [App\Http\Controllers\BackendController\MdAtletController::class, 'add_ac']);
Route::get('/mdatlet/edit/{id}', [App\Http\Controllers\BackendController\MdAtletController::class, 'edit']);
Route::POST('/mdatlet/edit/', [App\Http\Controllers\BackendController\MdAtletController::class, 'edit_ac']);
Route::get('/mdatlet/delete/{id}', [App\Http\Controllers\BackendController\MdAtletController::class, 'delete_ac']);

Route::get('/bleg', [App\Http\Controllers\BackendController\BLegController::class, 'index']);
Route::get('/bleg/add', [App\Http\Controllers\BackendController\BLegController::class, 'add']);
Route::post('/bleg/add', [App\Http\Controllers\BackendController\BLegController::class, 'add_ac']);
Route::get('/bleg/edit/{id}', [App\Http\Controllers\BackendController\BLegController::class, 'edit']);
Route::POST('/bleg/edit/', [App\Http\Controllers\BackendController\BLegController::class, 'edit_ac']);
Route::get('/bleg/delete/{id}', [App\Http\Controllers\BackendController\BLegController::class, 'delete_ac']);


Route::get('/mdseries', [App\Http\Controllers\BackendController\MdSeriesController::class, 'index']);
Route::get('/mdseries/add', [App\Http\Controllers\BackendController\MdSeriesController::class, 'add']);
Route::post('/mdseries/add', [App\Http\Controllers\BackendController\MdSeriesController::class, 'add_ac']);
Route::get('/mdseries/edit/{id}', [App\Http\Controllers\BackendController\MdSeriesController::class, 'edit']);
Route::POST('/mdseries/edit/', [App\Http\Controllers\BackendController\MdSeriesController::class, 'edit_ac']);
Route::get('/mdseries/delete/{id}', [App\Http\Controllers\BackendController\MdSeriesController::class, 'delete_ac']);


Route::resource('/sponsors', App\Http\Controllers\BackendController\SponsorController::class);
// Route::resource('prosducts', ProductController::class);

// Route::get('/mdsponsor', [App\Http\Controllers\MdSponsorController::class, 'index']);
// Route::get('/mdsponsor/add', [App\Http\Controllers\MdSponsorController::class, 'add']);
// Route::post('/mdsponsor/add', [App\Http\Controllers\MdSponsorController::class, 'add_ac']);

// Route::get('/mdsponsor/edit/{id}', [App\Http\Controllers\MdSponsorController::class, 'edit']);
// Route::POST('/mdsponsor/edit/', [App\Http\Controllers\MdSponsorController::class, 'edit_ac']);

// Route::get('/mdsponsor/delete/{id}', [App\Http\Controllers\MdSponsorController::class, 'delete_ac']);