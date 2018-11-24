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

//Home route
Route::get('/', function () {
    return view('home');
});

//Register route
Route::post('/registro', 'HomeController@register');

//Auth::routes();
Route::get('/cuenta', 'HomeController@index')->name('home');


