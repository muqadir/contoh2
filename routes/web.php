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
});
// Route::get('/', [App\Http\Controllers\AmbilAntrianController::class, 'index'])->name('index');
Route::post('/amampoli', [App\Http\Controllers\AmbilAntrianController::class, 'amampoli'])->name('index.amampoli');
// Route::get('/print', [App\Http\Controllers\AmbilAntrianController::class, 'print'])->name('index.print');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/antrian', [App\Http\Controllers\AntrianController::class, 'index'])->name('index');
// Route::get('/antri_cs/{id}/{id1}/{id2}', [App\Http\Controllers\AntrianController::class, 'antri_cs'])->name('antri_cs');
// Route::get('/antri_teller1/{id}/{id1}/{id2}', [App\Http\Controllers\AntrianController::class, 'teller1'])->name('teller1');
// Route::get('/antri_teller2/{id}/{id1}/{id2}', [App\Http\Controllers\AntrianController::class, 'teller2'])->name('teller2');




