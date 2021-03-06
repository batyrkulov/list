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

Route::get('/', 'RecordController@showAll');

Route::get('/{id}', 'RecordController@show');

Route::post('/add', 'RecordController@add');

Route::post('/find', 'RecordController@find');
