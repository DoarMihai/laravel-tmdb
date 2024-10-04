<?php

namespace MihaiStefanescu\TmdbApi\Providers;

use Illuminate\Support\ServiceProvider;

class TmdbServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/tmdb.php' => config_path('tmdb.php'),
        ]);
    }
}
