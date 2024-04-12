<?php

namespace App\Providers;

use App\Models\Information;
use Illuminate\Pagination\Paginator;
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
        $grps = \App\Models\GroupeService::whereActived('1')->with('services')->get();
        $info = Information::first();
        view()->share([
            "gs"=>$grps,
            'info'=>$info,
        ]);
        Paginator::useBootstrap();
    }
}
