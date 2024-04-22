<?php

use Illuminate\Support\Facades\Route;

Route::group(['domain' => 'blog.' . env('SITE_URL')], function()
{
    // Blog.assiatech.com/
    Route::get('/', 'App\Http\Controllers\BlogDomainController@index')->name('blog.index');
});