<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		Schema::defaultStringLength(191);
		
        view()->composer('partials.admin._nav', function ($view) {
            $view->with('pages', \App\Page::all());
        });
        view()->composer('partials._nav', function ($view) {
            $view->with('socialMedias', \App\SocialMedia::all());
        });
        view()->composer('partials._footer', function ($view) {
            $view->with('socialMedias', \App\SocialMedia::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
