<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WelcomeController@index');
Route::post('/createStudent', 'WelcomeController@createStudent');
