<?php


Route::get('/','UtamaController@index')->name('home');
Route::get('/karyawan', 'UtamaController@create')->name('karyawan');
Route::get('tambah', 'UtamaController@input')->name('input');
Route::post('/karyawan', 'UtamaController@store');
Route::get('/karyawan/edit/{id}', 'UtamaController@get_id');
Route::put('/karyawan/{id}', 'UtamaController@edit');
Route::delete('/karyawan/{id}', 'UtamaController@hapus');