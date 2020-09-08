<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "index page";

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', ['uses'=>'LoginController@verify']);
Route::get('/logout', ['as'=>'logout.index', 'uses'=>'logoutController@index']);

	
	Route::middleware(['sess'])->group(function(){

	Route::get('/xyz', 'HomeController@index')->name('home.index');
});

});
