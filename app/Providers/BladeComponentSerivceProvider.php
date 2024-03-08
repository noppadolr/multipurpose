<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeComponentSerivceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        Blade::component('backend.partials.main', 'admin-layout');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
