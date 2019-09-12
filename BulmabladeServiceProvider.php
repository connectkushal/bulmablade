<?php

namespace Connectkushal\Bulmablade;


class BulmabladeServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/bulmablade.php', 'bulmablade');
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class
            ]);
        }

        $this->publishes([
            __DIR__.'/views' => resource_path('views'),
            __DIR__.'/config/bulmablade.php' => config_path('bulmablade.php'),
            // __DIR__.'/sass' => resource_path('sass'),
        ]);
    }
}
