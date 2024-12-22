<?php

use Illuminate\Support\Facades\Route;



Route::get('/bands', 'BandController@getAll');
Route::get('/bands/store', 'BandController@store');
Route::get('/bands/gender/{gender}', 'BandController@getByGender');
Route::post('/bands/{id}', 'BandController@getById');
