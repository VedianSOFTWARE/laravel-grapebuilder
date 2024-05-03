<?php

namespace Vediansoftware\Grapebuilder;

use Illuminate\Support\ServiceProvider as IlluminateProvider;

class ServiceProvider extends IlluminateProvider
{
    public function register(): void
    {
        $this->publishes([
            $this->path('Migrations') => database_path('migrations/pagebuilder')
        ], 'pagebuilder-migrations');
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom($this->path('database/migrations', true));
    }

    protected function path(string $path, bool $root = false): string
    {
        if (!$root)
            return $this->src() . "/{$path}";
        else
            return $this->root() . "/{$path}";
    }

    private function src(): string
    {
        return __DIR__;
    }

    private function root(): string
    {
        return dirname($this->src());
    }
}
