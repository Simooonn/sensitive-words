<?php

namespace HashyooWordsSafe\Providers;

use HashyooWordsSafe\WordsSafe;
use Illuminate\Support\ServiceProvider;

class WordsSafeProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 在容器中注册
        $this->app->singleton('WordsSafe', function () {
            return new WordsSafe();
        });
    }
}
