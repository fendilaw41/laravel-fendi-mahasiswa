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


/* lumen.laravel
$router->get('/fakultas', 'fakultasController@index');
$router->get('/fakultas/{id}', 'fakultasController@show');
$router->post('/fakultas/save', 'fakultasController@store');
$router->post('/fakultas/{id}/update', 'fakultasController@update');
$router->post('/fakultas/{id}/delete', 'fakultasController@destroy');
*/