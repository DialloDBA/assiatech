<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssiaController;

Route::controller(AssiaController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    // Route::get('/contact', 'contact')->name('contact');
    // Route::post('/contact', 'new_contact_message')->name('contact.store');
    Route::get('/apropos-de-nous', 'contact')->name('about');
    Route::get('/nos-services', 'contact')->name('services');
    Route::get('/nos-projets-realises', 'contact')->name('portofolio');
    Route::get('/notre-carriere', 'contact')->name('carriere');
    Route::get('/nos-actualites', 'posts')->name('posts');
    Route::get('/nos-actualites/{post:unique}', 'single')->name('posts.single');
    Route::get('/termes-et-conditions', 'contact')->name('termes-conditions');
    Route::get('/politique-de-confidentialite', 'contact')->name('privacy-policy');

    // Route::any('{any}', function ($any) {
    //     // "Sorry, the page you requested ($any) was not found.";
    //     return view("erreurs.404",[
    //         "page"=>$any
    //     ]);
    // })->where('any', '.*');
});


