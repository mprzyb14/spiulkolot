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
//routing głownej strony
Route::get('/', 'MainController@main');
//routing listy hoteli
Route::get('/lista.hoteli', 'MainController@list');
//routing do szczegółowych informacji
Route::get('/hotel', 'MainController@detail');
//routing do logowania
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
