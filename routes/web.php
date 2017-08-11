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

//Route::get('/', function () {
	
//});
use App\Task;

Route::get('/', 'TasksController@index');
Route::get('/create', 'TasksController@create');
Route::post('/store', 'TasksController@store');
Route::get('/{id}/edit', 'TasksController@edit');
Route::put('/{id}/update', 'TasksController@update');
//Route::get('name', "ControllerTask@myName");


