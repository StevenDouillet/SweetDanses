<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/danses', 'App\Http\Controllers\PagesController@disciplines')->name('disciplines');
Route::get('/planning', 'App\Http\Controllers\PagesController@planning')->name('planning');
Route::get('/tarifs', 'App\Http\Controllers\PagesController@prices')->name('prices');

// TODO: NEWS ROUTES

Auth::routes();

