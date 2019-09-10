<?php

namespace Connectkushal\Bulmablade;


class BulmabladeServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'bulmablade');

        $this->publishes([
            __DIR__.'/views' => resource_path('views'),            
        ]);
    }
}
