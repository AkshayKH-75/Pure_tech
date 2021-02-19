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
// Route::get("/tabel","Tabel@index")->name('tabel');
// Route::get("/datatabel","Tabel@dataTabelindex")->name('datatabel');


Route::get("/home","DigitToWord@DigitToWord")->name('home');
Route::post("/convert","DigitToWord@ConvetdigitToWord")->name('convert');

Route::get("/player","SportPlayer@index")->name('player');
Route::post("/addPlayer","SportPlayer@addPlayer")->name('addPlayer');
Route::post("/getPlayer","SportPlayer@getPlayer")->name('getPlayer');

