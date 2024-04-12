
<?php

use Illuminate\Support\Facades\Route;


Route::domain("assiatech.web")->group(function () {
    Route::get('/', function () {
        return "teste";
    });
});