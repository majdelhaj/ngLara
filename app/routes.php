<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// =============================================
// API ROUTES ==================================
// =============================================
Route::group(array('prefix' => 'api'), function() {
	// since we will be using this just for CRUD, we won't need create and edit
	// Angular will handle both of those forms
	// this ensures that a user can't access api/create or api/edit when there's nothing there
	Route::resource('users', 'UserController', 
		array('only' => array('index', 'show', 'store', 'destroy')));
});



// =============================================
// YOUR ROUTES =================================
// =============================================
//Example
/////////
//Route::post('login', 'UserController@login');
//Route::get('logout', 'UserController@logout');



// =============================================
// All Routes (Angular Here) ===================
// =============================================
Route::get('{all}', function($uri) {

	return View::make('layouts.main');

})->where('all', '.*');
