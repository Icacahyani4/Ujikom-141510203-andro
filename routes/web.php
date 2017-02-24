<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::group(['middleware' => ['api']], function () {
//     Route::post('register', 'APIController@register');
//     Route::post('login', 'APIController@login');
//     Route::group(['middleware' => 'authJWT'], function () {
//     	Route::post('get_user_details', 'APIController@get_user_details');
//     });
// });

Auth::routes();
Route::get('/', 'HomeController@index');
Route::resource('jabatan', 'JabatanController');
Route::resource('golongan', 'GolonganController');
Route::resource('katelembur', 'KategoriLemburController');
Route::resource('pegawai', 'PegawaiController');
Route::resource('lempeg', 'LemburPegawaiController');
Route::resource('tunjangan', 'TunjanganController');
Route::resource('gaji', 'PenggajianController');
Route::resource('tunpeg', 'TunjanganPegawaiController');
Route::resource('gapeg', 'GajiController@index');
Route::resource('error', 'errorController');
Route::resource('user', 'userController');
// Route::get