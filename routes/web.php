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

 Route::get('/', function () {
     return (view('index'));
 });

Route::get('/main', 'App\Http\Controllers\Main@index')->name('main.index');
Route::get('/account', 'App\Http\Controllers\Account@index')->name('account.index');
Route::get('/cards', 'App\Http\Controllers\Cards@index')->name('cards.index');
