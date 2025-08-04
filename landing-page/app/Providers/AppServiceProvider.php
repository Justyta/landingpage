<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
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
   
public function boot()
{
    View::composer('sections.faq.faq', function ($view) {
        $view->with('faqs', require base_path('data/faq.php'));
    });
}
}
