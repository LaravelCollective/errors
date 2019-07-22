<?php

namespace Collective\Errors;

use Illuminate\Support\ServiceProvider;

class ErrorsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/publish/errors' => base_path('views/errors'),
            __DIR__.'/publish/svg' => base_path('public/svg'),
        ]);
    }
}
