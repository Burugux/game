<?php


/**
 * resource handler for games
 */

Route::resource('games' ,'gamesController');
Route::get('games/{id}/delete' ,'gamesController@delete');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);





