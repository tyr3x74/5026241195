<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// 1. Import the Paginator facade class
use Illuminate\Pagination\Paginator;

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
        // 2. Enforce the Bootstrap 5 pagination theme globally
        Paginator::useBootstrapFive();

        // Note: If you are using Bootstrap 4 instead, use Paginator::useBootstrapFour();
    }
}
