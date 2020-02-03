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

Route::get('/', function () {
    return view('welcome');
});
//================Pelajar====================================
Route::get('/siswa','SiswaController@index');
Route::post('/siswa/create','SiswaController@create');
Route::get('/siswa/{id}/edit','SiswaController@edit');
Route::post('/siswa/{id}/update','SiswaController@update');
Route::get('/siswa/{id}/delete','SiswaController@delete');
Route::get('/siswa/{id}/print', 'SiswaController@print');
//===================GURU==================================
Route::get('/guru','GuruController@index');
Route::post('/guru/create','GuruController@create');
Route::get('/guru/{id}/edit','GuruController@edit');
Route::post('/guru/{id}/update','GuruController@update');
Route::get('/guru/{id}/delete','GuruController@delete');
Route::get('/guru/{id}', 'GuruController@show');
//==================DATAKASUS===============================
Route::get('/datakasus','DatakasusController@index');
Route::post('/datakasus/create','DatakasusController@create');
Route::get('/datakasus/{id}/edit','DatakasusController@edit');
Route::post('/datakasus/{id}/update','DatakasusController@update');
Route::get('/datakasus/{id}/delete','DatakasusController@delete');
Route::get('/datakasus/{id}/print', 'DatakasusController@print');
//===================DATAPOIN===============================
Route::get('/inputpoin','InputpoinController@index');
Route::post('/inputpoin/create','InputpoinController@create');
Route::get('/inputpoin/{id}/edit','InputpoinController@edit');
Route::post('/inputpoin/{id}/update','InputpoinController@update');
Route::get('/inputpoin/{id}/delete','InputpoinController@delete');
Route::get('/inputpoin/{id}', 'InputpoinController@show');
Route::get('/inputpoin/{id}/print', 'InputpoinController@print');

//====================DATARAYON==============================
Route::get('/rayon','RayonController@index');
Route::post('/rayon/create','RayonController@create');
Route::get('/rayon/{id}/edit','RayonController@edit');
Route::post('/rayon/{id}/update','RayonController@update');
Route::get('/rayon/{id}/delete','RayonController@delete');
Route::get('/rayon/{id}', 'RayonController@show');
Auth::routes();
//===========================================================
Route::get('/home', 'HomeController@index')->name('home');
//=========================================================
Route::get('/tampilan ','TampilanController@index');
