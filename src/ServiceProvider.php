<?php

namespace Vedian\Grapebuilder;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as IlluminateProvider;
use Vedian\Grapebuilder\Support\Facades\Path;
use Vedian\Grapebuilder\Support\PathSupport;
use Vedian\Grapebuilder\Support\TemplateSupport;
use Vedian\Grapebuilder\Support\Traits\VedianProvider;

class ServiceProvider extends IlluminateProvider
{
    use VedianProvider;

    public function register(): void
    {
    }

    public function boot(): void
    {
        $this->facades();
        $this->bootable();
        $this->loading();
        $this->publishing();
    }

    protected function bootable()
    {
        Blade::componentNamespace('Grapebuilder\\View', 'Grapebuilder');
    }

    protected function loading()
    {
        $this->loadMigrationsFrom(Path::migrations());
        $this->loadViewsFrom(Path::views(), 'Grapebuilder');
        $this->loadRoutesFrom(Path::routes('web'));
    }

    protected function publishing()
    {
        $this->publishes([
            Path::migrations() => database_path('migrations'),
            Path::views() => resource_path('views/vendor/Grapebuilder'),
        ], 'grapebuilder-publish');
    }

    protected function facades()
    {
        $this->bindFacade('path-support', PathSupport::class);
        $this->bindFacade('template-support', TemplateSupport::class);
    }
}
