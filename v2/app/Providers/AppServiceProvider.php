<?php

namespace App\Providers;

use App\Models\Information;
use Illuminate\Support\Facades\App;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
    

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $acceptLang = ['fr', 'en'];
        (in_array($lang, $acceptLang)) ? App::setlocale($lang) : '';

        $grps = \App\Models\GroupeService::whereActived('1')->with('services')->get();
        $info = Information::first();
        view()->share([
            "gs"=>$grps,
            'info'=>$info,
        ]);
        Paginator::useBootstrap();
    }

   
}
