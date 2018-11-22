<?php

namespace WebReinvent\VaahIndexer;

class VaahIndexerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'vaah-indexer');

        $this->publishes([
            __DIR__.'/config/config.php' => config_path('vaah-indexer.php'),
        ], 'config');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerVaahIndexer();

        $this->app->alias('indexer', \WebReinvent\VaahIndexer\Indexer::class);

        $this->mergeConfigFrom(
            __DIR__.'/config/config.php', 'indexer'
        );
    }

    private function registerVaahIndexer()
    {
        $this->app->singleton('indexer', function ($app) {
            return new VaahIndexer();
        });
    }

}
