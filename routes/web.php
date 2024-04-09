<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PrincipalController@index')->name('site.index');
Route::get('/chat', 'App\Http\Controllers\ChatController@chat')->name('site.chat');
