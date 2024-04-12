<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TemoignageController;
use App\Http\Controllers\GroupeServiceController;
use App\Http\Controllers\ContactMessageController;

Route::controller(AdminController::class)->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', 'index')->name('home');

});
Route::prefix('admin')->name('admin.')->group(function(){
    Route::controller(AdminController::class)->group(function () {
        Route::middleware(['auth'])->group(function () {
            Route::get('/', 'index')->name('home');
        });
        Route::get("login","login")->name("login");
        Route::get("register","login")->name("register");
        Route::get("mot-de-passe-oublie","forgotPassword")->name("forgot-password");
    });
    Route::controller(App\Http\Controllers\PostController::class)->group(function () {
        Route::get('liste-des-articles', 'index')->name('posts.index');
        Route::get('creer-un-article', 'create')->name('posts.create');
        Route::post('creer-un-article', 'store')->name('posts.store');
        Route::get('liste-des-articles/{post:unique}', 'show')->name('posts.show');
        Route::get('liste-des-articles/{post:unique}/edit', 'edit')->name('posts.edit');
    });
    Route::resource('temoignages', TemoignageController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('groupe-services', GroupeServiceController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('contact-messages', ContactMessageController::class)->only(['index','show']);
});
