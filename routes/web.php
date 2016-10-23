<?php

Auth::routes();

Route::get('/', [
    'as'   => 'transpire.home',
    'uses' => 'Transpire\Core\Http\Controllers\HomeController@index',
]);

// Route::get('/sitemap.xml', [
//     'as' => 'transpire.sitemap',
//     'uses' => 'Transpire\Core\Http\Controllers\SitemapController@index',
// ]);
