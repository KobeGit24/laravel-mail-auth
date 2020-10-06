<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'GuestController@index') -> name('phone.index');

Route::get('/post/create', 'LoggedController@create') -> name('phone.create');

Route::post('/post/store', 'LoggedController@store') -> name('phone.store');

Route::get('/show/{id}', 'GuestController@show') -> name('phone.show');

Route::get('/delete/{id}', 'LoggedController@destroy') -> name('phone.delete');

Route::get('/edit/{id}', 'LoggedController@edit') -> name('phone.edit');

Route::post('/post/update/{id}', 'LoggedController@update') -> name('phone.update');
