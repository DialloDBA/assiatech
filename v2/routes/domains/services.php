<?php

use Illuminate\Support\Facades\Route;

Route::group(['domain' => 'services.' . env('SITE_URL')], function()
{
    // apps.assiatech.com/
    Route::get('/', 'App\Http\Controllers\ServicesDomainController@index')->name('services.index');
});