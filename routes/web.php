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

//Para que nuestro vue-router funcione de manera correcta.
Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');
