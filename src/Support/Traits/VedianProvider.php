<?php

namespace Vedian\Grapebuilder\Support\Traits;

trait VedianProvider
{
    private function bindFacade(string $name, string $class)
    {
        $this->app->bind($name, function () use ($class) {
            return new $class;
        });
    }
}

