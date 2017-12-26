<?php namespace Miner;

use Illuminate\Support\ServiceProvider;
use Miner\Services\Miner;

class MinerServiceProvider extends ServiceProvider
{
    private $path = __DIR__ . '/../';
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        $this->loadViewsFrom($this->path('resources/views'), 'miner');
        //$this->loadRoutesFrom($this->path('routes/web.php'));

       if($this->app->runningInConsole()){
            $this->registerMigrations();
            
            $this->publishes([
                $this->path('database/migrations', database_path('migrations'))
            ], 'miner-migrations');

            $this->publishes([
                $this->path('resources/assets/views') => resource_path('views/vendor/miner')
            ], 'miner-views');

            $this->publishes([
                $this->path('resources/assets/js') => resource_path('assets/js/components/miner')
            ], 'miner-components');

           $this->commands([
                Commands\MineCommand::class,
           ]);
       }
    }


    private function registerMigrations(){
        $this->loadMigrationsFrom($this->path('database/migrations'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Miner', Miner::class);
    }

    private function path($path = null){
        return $this->path . $path;
    }
}
