<?php

namespace Vedian\Grapebuilder\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method __call(string $method, array $args)
 * @method src()
 * @method root(string $path = null)
 * @method resources(string $path = null)
 * @method models(string $path = null)
 * 
 * 
 * @see \Vedian\Grapebuilder\Support\TemplatingSupport
 */
class Templates extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'templates-support';
    }
}
