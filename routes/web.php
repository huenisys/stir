<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Stir\Http\Controllers'], function () {

	// Route::get('/', 'PageController@getWelcome');
	// Route::get('dashboard', 'PageController@getDashboard')->name('dashboard')->middleware('auth');
	Route::get('logout', 'PageController@getLogout')->middleware('guest');

	Route::get('features', 'PageController@getFeatures');
	Route::get('faqs', 'PageController@getFaqs');
	Route::get('contact', 'PageController@getContact');
	Route::post('contact', 'FormSubmissionsController@contact');

	Route::get('terms-and-privacy', 'PageController@getLegal')->name('legal');

	$mailables = [
		'ContactNotifier',
		'ContactResponder',
	];

	foreach ($mailables as $mailable) {
		$class = 'Stir\Mail\\'.$mailable;
		Route::get('/mailable/'.$mailable, function () use ($class) {
				return new $class();
		});
	}

});

//Stir::authRoutes();

Route::group(['middleware' => ['web'], 'namespace' => 'Stir\Http\Controllers'], function () {

	Route::get('/', function () {

		$newContactAlertMessage = Request::session()->pull('newContactAlertMessage');

		return view('stir::page.guest', compact(
			'newContactAlertMessage'
		));

	});

	Route::get('/get-me', 'DashboardController@getMe');

	Route::get('/dashboard', 'DashboardController@index')->name('home');
	Route::put('/user', 'DashboardController@update');

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
