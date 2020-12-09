<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('siswa','SiswaController@index');
Route::post('siswa','SiswaController@create');
Route::get('/siswa/{id}','SiswaController@detail');
Route::put('/siswa/{id}','SiswaController@update');
Route::delete('/siswa/{id}','SiswaController@delete');

Route::get('fakultas','FakultasController@index');
Route::post('fakultas','FakultasController@create');
Route::get('/fakultas/{id}','FakultasController@detail');
Route::put('/fakultas/{id}','FakultasController@update');
Route::delete('/fakultas/{id}','FakultasController@delete');

Route::get('prodi','ProdiController@index');
Route::post('prodi','ProdiController@create');
Route::get('/prodi/{id}','ProdiController@detail');
Route::put('/prodi/{id}','ProdiController@update');
Route::delete('/prodi/{id}','ProdiController@delete');