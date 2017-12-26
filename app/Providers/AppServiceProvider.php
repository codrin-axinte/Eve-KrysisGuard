<?php

namespace App\Providers;

use App\Category;
use App\Page;
use App\Post;
use App\Services\Eve;
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
	    Schema::defaultStringLength( 191 );

	    \View::share('site_title', setting('site.title', config('app.name')));

		$this->bootVoyager();

    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {

    }

	private function bootVoyager(){
		\Voyager::useModel('Category', Category::class);
		\Voyager::useModel('Post', Post::class);
		\Voyager::useModel('Page', Page::class);
	}
}
