<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CustomerImportService;

class CustomerImportServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(CustomerImportService::class, function ($app) {
            return new CustomerImportService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
