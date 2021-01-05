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

Route::get('/', 'PagesController@index');
Route::get('/hotel', 'PagesController@hotel');
Route::get('/spa', 'PagesController@spa');
Route::get('/estate', 'PagesController@estate');
Route::get('/decoration', 'PagesController@decoration');
Route::get('/fashion', 'PagesController@fashion');
