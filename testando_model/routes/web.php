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

Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get', 'post'], '/herois', 'HeroiController@index');
Route::view('/herois/create', 'herois.create');
Route::get('/herois/info/{id}', 'HeroiController@info')->name('info');
Route::view('/herois/info', 'herois.info');
Route::view('/herois/index', 'herois.index');
