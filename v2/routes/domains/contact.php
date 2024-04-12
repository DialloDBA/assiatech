<?php

use Illuminate\Support\Facades\Route;



Route::group(['domain' => 'contact.assiatech.web'], function()
{
    // contact.assiatech.com/
    Route::get('/', 'App\Http\Controllers\ContactDomainController@index')->name('contact');
    Route::post('/', 'App\Http\Controllers\ContactDomainController@store')->name('contact.store');
    // contact.assiatech.com/
});