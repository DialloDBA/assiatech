<?php

use Illuminate\Support\Facades\Route;

Route::group(['domain' => 'apps.' . env('SITE_URL')], function()
{
    // apps.assiatech.com/
    Route::get('/', 'App\Http\Controllers\AppsDomainController@index')->name('apps.index');
});