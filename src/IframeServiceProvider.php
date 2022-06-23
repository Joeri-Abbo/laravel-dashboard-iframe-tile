<?php

namespace JoeriAbbo\Iframe;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class IframeServiceProvider extends ServiceProvider
{
    const PACKAGE_NAME = 'dashboard-iframe-tile';

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/' . self::PACKAGE_NAME),
        ], 'dashboard-iframe-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', self::PACKAGE_NAME);

        Livewire::component('iframe', IframeComponent::class);
    }
}
