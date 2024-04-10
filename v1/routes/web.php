<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssiaController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TemoignageController;
use App\Http\Controllers\GroupeServiceController;
use App\Http\Controllers\ContactMessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/t', function () {
    $groupes = \App\Models\GroupeService::find(1);
    dd($groupes->services()->get());
});

Route::controller(AssiaController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'new_contact_message')->name('contact.store');
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
// $sous_domaine ="{account}.".env("APP_URL")."8000";

// Route::domain($sous_domaine)->group(function () {
// dd("holl");
//     Route::get('user/{id}', function (string $account, string $id) {
//         // ...
//     });
// });
