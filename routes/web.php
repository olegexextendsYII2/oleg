<?php


Route::get('/', 'PortfolioController@index')->name('index');
Route::get('/create', 'PortfolioController@create')->name('create');
Route::post('/store', 'PortfolioController@store')->name('store');
Route::get('/{id}/edit' , 'PortfolioController@edit')->name('edit');
Route::post('/{portfolio}/update', 'PortfolioController@update')->name('update');
Route::get('/{id}/crosOut', 'PortfolioController@crosOut')->name('crocOut');

Route::get('/create_categori/index', 'admin\categoriController@indexCategori')->name('indexCategori');
Route::get('/create_categori/create', 'admin\categoriController@createCategori')->name('createCategori');
Route::get('/create_categori/{id}/delete', 'admin\categoriController@deleteCategori')->name('deleteCategori');
Route::post('/create_categori/store', 'admin\categoriController@storeCategori')->name('storeCategori');
