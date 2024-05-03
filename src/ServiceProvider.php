<?php

namespace Vediansoftware\Grapebuilder;

use Illuminate\Support\ServiceProvider as IlluminateProvider;

class ServiceProvider extends IlluminateProvider
{
    public function register(): void
    {
        $this->publishes([
            $this->root('database/migrations') => database_path('migrations/grapebuilder')
        ], 'grapebuilder-migrations');
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(
            $this->root('database/migrations')
        );
        
        $this->loadRoutesFrom(
            $this->root('route/web.php')
        );
    }

    private function src(string $path): string
    {
        return __DIR__ . "/{$path}";
    }

    private function root(string $path): string
    {
        return dirname(__DIR__) . "/{$path}";
    }
}
