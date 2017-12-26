<?php

namespace EveBridge;

use File;
use Illuminate\Support\ServiceProvider;
use EveBridge\Services\Eve;
use EveBridge\Services\EveDriver;
use GuzzleHttp\Client;
use Laravel\Socialite\Contracts\Factory;

class EveBridgeServiceProvider extends ServiceProvider {

	private $path = __DIR__ . '/../';
	private $namespace = 'eve';
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()  {
	/*    $this->publishes([
		                     $this->path('config/eve.php') => config_path('eve.php'),
	                     ]);*/
        $this->loadMigrationsFrom($this->path('database/migrations'));
	    $this->bootViews();
	    $this->bootEveDriver();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
	    $this->app->singleton('eve', function(){
	    	return new Eve(new Client());
	    });
    }

	private function registerConfig() {
		$config_path = config_path('eve.php');
		if(!File::exists( $config_path)){
			$config_path = $this->path('config/eve.php');
		}

		$this->mergeConfigFrom($config_path, $this->namespace);
    }

    private function bootEveDriver(){
    	$socialite = $this->app->make(Factory::class);
    	$socialite->extend(
    		'eve',
		    function ($app) use($socialite){
			    $config = $app['config']['services.eve'];
			    return $socialite->buildProvider(EveDriver::class, $config);
		    }
	    );
    }

	private function bootViews() {
		$src_path = $this->path('resources/views');
		$path = $vendor_path = resource_path('views/vendor/' . $this->namespace);
		$this->publishes([$src_path => $vendor_path ]);
		if(!File::exists( $vendor_path)){
			$path = $src_path;
		}
		$this->loadViewsFrom($path, $this->namespace);
    }

	private function path( $file = null ) {
		return $this->path . $file;
    }
}
