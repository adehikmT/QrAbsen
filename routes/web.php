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

Route::get('/','dashboardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/jurusan','JurusanController@index');
Route::get('/kelas','KelasController@index');
Route::get('/jabatan','JabatanController@index');
Route::get('/admin/user','LevUserController@index');
Route::get('/admin/report','ReportController@index');