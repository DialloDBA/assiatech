<?php

use Illuminate\Support\Facades\Route;

Route::group(['domain' => 'carrieres.' . env('SITE_URL')], function()
{
    // apps.assiatech.com/
    Route::get('/', 'App\Http\Controllers\CareersDomainController@index')->name('carrieres.index');
});