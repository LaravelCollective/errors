<?php

namespace Collective\Errors;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class ErrorsServiceProvider extends ServiceProvider implements DeferrableProvider
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
        ]);
    }
}
