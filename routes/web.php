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

Route::get('/','UtamaController@index')->name('home');
Route::get('/karyawan','UtamaController@create')->name('karyawan');
Route::get('/tambah','UtamaController@input')->name('input');
Route::get('/karyawan','UtamaController@store');
