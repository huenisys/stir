<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Stir\Http\Controllers'], function () {

	// Route::get('/', 'PageController@getWelcome');
	Route::get('dashboard', 'PageController@getDashboard')->name('dashboard')->middleware('auth');
	Route::get('logout', 'PageController@getLogout')->middleware('guest');

	Route::get('features', 'PageController@getFeatures');
	Route::get('faqs', 'PageController@getFaqs');
	Route::get('contact', 'PageController@getContact');
	Route::get('terms-and-privacy', 'PageController@getLegal')->name('legal');

});

//Stir::authRoutes();


Route::group(['middleware' => ['web'], 'namespace' => 'Stir\Http\Controllers'], function () {

	Route::get('/', function () {
			return view('stir::page.guest');
	});

	Route::get('/get-me', 'UserController@getMe');

	Route::get('/user', 'UserController@index')->name('home');
	Route::put('/user', 'UserController@update');

	Route::get('/admin', 'AdminController@index')->name('admin');

	Route::resource('users', 'UsersResourceController');

	Route::any('delete-users', function(){
			$arr = app()->request->input('ids');
			foreach ($arr as $id) {
					\App\user::find($id)->delete();
			}
			return $arr;
	});

});
