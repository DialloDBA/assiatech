<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        using: function () {
            Route::domain('apps.' . env('SITE_URL'))
            ->middleware('web')
            ->group(base_path('routes/domains/apps.php'));

            Route::domain('apps.' . env('SITE_URL'))
            ->middleware('web')
            ->group(base_path('routes/domains/contact.php'));

            Route::domain(env('SITE_URL'))
            ->middleware('web')
            ->group(base_path('routes/domains/web.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
