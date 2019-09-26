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

//Route::get('/devices', 'DevicesController@index');
//Route::get('/devices/create', 'DevicesController@create');
//Route::get('/devices/{device}', 'DevicesController@show');
//Route::post('/devices', 'DevicesController@store');
//Route::get('/devices/{device}/edit', 'DevicesController@edit');
//Route::patch('/devices/{device}', 'DevicesController@update');
//Route::delete('/devices/{device}', 'DevicesController@destroy');

Route::resource('/devices', 'DevicesController');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    return view('test');
});
