<?php

namespace Vedian\Grapebuilder\Support;

use Vedian\Grapebuilder\Support\Enum\TemplatesEnum;

class TemplateSupport
{
    // TODO: Add config file for Grapebuilder
    protected string $bladeNamespace = 'Grapebuilder::template';

    protected string $part;

    public function __call($name, $arguments)
    {
        switch ($name) {
            case 'footer':
            case 'header':
            case 'section':
                $this->part = $name;
                break;
            case 'exists':
                return TemplatesEnum::tryFrom($name);
        };

        dump($this);

        return $this;
    }

    public function view(string $view, array $data = [], array $mergeData = [])
    {
        return view("{$this->bladeNamespace}.{$this->part}.{$view}", $data, $mergeData);
    }
}
