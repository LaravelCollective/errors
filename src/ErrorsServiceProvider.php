<?php

namespace Collective\Errors;

use Illuminate\Support\ServiceProvider;

class ErrorsServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/publish/errors' => resource_path('views/errors'),
            __DIR__.'/publish/svg' => public_path('svg'),
        ], 'laravel-collective-errors');
    }
}
