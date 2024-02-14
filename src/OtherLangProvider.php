<?php

namespace elyasbassir\OtherLang;

use Illuminate\Support\ServiceProvider;

class OtherLangProvider extends ServiceProvider
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
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}
