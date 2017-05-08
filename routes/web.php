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

Auth::routes();

/*Route::get('/', function () {
    return redirect('/ads');
});*/

Route::get('/ads', 'AdsController@index');

Route::get('/a','controllerismi@methodismi');

Route::get("/users/{id}","ders@urlparametre");