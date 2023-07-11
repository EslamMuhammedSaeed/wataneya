<?php

namespace App\Providers;

use App\Models\Partner;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::useBootstrap();
        $partners=Partner::orderBy('order')->get();
        $services_nav=Service::orderBy('order')->get();

        View::share('partners',$partners); 
        View::share('services_nav',$services_nav); 

    }
}
