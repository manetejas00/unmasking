<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Check if the settings table exists
        if (Schema::hasTable('settings')) {
            // Use caching to optimize database calls
            $settings = Cache::remember('settings', 60 * 60, function () {
                return Setting::first(); // Fetch the first settings record
            });
        } else {
            // Fallback if settings table does not exist
            $settings = null;
        }

        // Share the settings globally with all views
        View::composer('*', function ($view) use ($settings) {
            $view->with('settings', $settings);
        });
    }
}
