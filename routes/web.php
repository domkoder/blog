<?php


	Route::get('/','PostController@index');

	Route::get('/home','PostController@index');

	Route::get('/post/create', 'PostController@create');

	Route::post('/post', 'PostController@store');

	Route::get('/post/{post}','PostController@show');

	Route::post('/post/{post}/comments','CommentController@store');

	Route::get('/register','RegistrationController@create');

	Route::post('/register','RegistrationController@store');

	Route::get('/login','SessionsController@create')->name('login');

	Route::post('/login', 'SessionsController@store');

	Route::match(['get', 'post'], '/logout', 'SessionsController@destroy');

	Route::get('/users/dashboard', 'DashboardController@show');

	Route::get('/edit/post','PostController@edit');

	Route::get('/delete/{id}','PostController@DeletePost');

	Route::get('/update/{id}','PostController@EditForm');

	Route::post('/edit/{id}','PostController@EditPost');

	
	



