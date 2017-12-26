<?php

namespace News;

use Illuminate\Support\ServiceProvider;
use News\Services\News;

class NewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('News', News::class);
    }
}
