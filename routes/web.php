<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/', 'App\Http\Controllers\PrincipalController@index')->name('site.index');
Route::get('/api', 'App\Http\Controllers\ApiController@index')->name('site.api');
