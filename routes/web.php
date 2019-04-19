<?php

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

Route::get('/', 'MainController@index')->name('home');
Route::get('/admin', 'MainController@admin')->name('admin')->middleware('auth');
Route::get('/login', 'MainController@login')->name('login');
Route::post('/auth/login', 'AuthController@check');
