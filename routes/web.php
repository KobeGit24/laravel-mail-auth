<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'GuestController@index') -> name('phone.index');

Route::get('/show/{id}', 'GuestController@show') -> name('phone.show');

Route::get('/delete/{id}', 'LoggedController@destroy') -> name('phone.delete');
