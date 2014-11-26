<?php

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

Route::get('register', 'RegistrationController@create');
Route::resource('registration', 'RegistrationController');

Route::get('logout', 'SessionsController@destroy');
Route::get('login', 'SessionsController@create');
Route::resource('sessions', 'SessionsController');
