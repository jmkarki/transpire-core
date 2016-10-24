<?php

Auth::routes();

Route::get('/', [
    'as' => 'transpire.home',
    'uses' => 'Transpire\Core\Http\Controllers\HomeController@index',
]);
Route::get('/show', [
    'as' => 'transpire.show',
    'uses' => 'Transpire\Core\Http\Controllers\HomeController@show',
]);

Route::get('register/verify/{token}', 'Transpire\Core\Http\Controllers\Auth\RegisterController@verify');

Route::get('/sitemap.xml', [
    'as' => 'transpire.sitemap',
    'uses' => 'Transpire\Core\Http\Controllers\HomeController@index',
]);
