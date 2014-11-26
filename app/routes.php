<?php

#Home
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

#Registration
Route::get('register', 'RegistrationController@create')->before('guest');
Route::post('register', ['as' => 'registration.store', 'uses' => 'RegistrationController@store']);

#Authentication
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);
