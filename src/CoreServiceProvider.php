<?php

namespace Transpire\Core;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerIncludes();
        $this->registerModelEvents();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'core');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'core');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Register extra file includes.
     *
     * @return void
     */
    public function registerIncludes()
    {
        foreach (new \DirectoryIterator(__DIR__.'/../routes/') as $fileInfo) {
            if (!$fileInfo->isDot()) {
                include __DIR__.'/../routes/'.$fileInfo->getFilename();
            }
        }

        include __DIR__.'/helpers.php';
    }

    /**
     * Register the Event Subscriber(Observer) for Models.
     *
     * @return void
     */
    public function registerModelEvents()
    {
    }
}
