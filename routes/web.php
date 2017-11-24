<?php

Route::get('/', 'PortfolioController@index')->name('home.page');
Route::get('/portfolio', 'PortfolioController@showPortfolio')->name('portfolio');
Route::get('/about', 'PortfolioController@about')->name('about.page');
Route::get('/category/{id}', 'PortfolioController@showCategory')->name('show.category');
Route::get('/description/{id}', 'PortfolioController@showDescription')->name('show.description');
Route::get('/contact', 'PortfolioController@contact')->name('contact');

Route::group([
	'prefix' => 'admin',
	'namespace' => 'admin',
	'middleware' => 'auth'
		] ,
		function(){
			Route::get('/', 'DashboardController@index')->name('home.page.admin');

			Route::resource('/portfolio' , 'PortfolioAdminController');
			Route::resource('/category' , 'CategoryController');

		});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
