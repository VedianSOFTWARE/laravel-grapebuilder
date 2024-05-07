<?php

namespace Vedian\Grapebuilder\Support;

use Vedian\Grapebuilder\Support\Enum\TemplatesEnum;

class TemplateSupport
{
    protected string $view;
    protected string $part;
    protected array $data = [];
    protected array $mergeData = [];

    // TODO: Add config file for Grapebuilder
    protected string $bladeNamespace = 'Grapebuilder';

    public function exists(string $type)
    {
        // TODO: Make sure this templates enum will become a support package like this support file
        // TODO: See $this->view()
        return TemplatesEnum::tryFrom($type);
    }

    public function render()
    {
        // TODO: Make sure this templatesupport file will become a new package
        return view("{$this->bladeNamespace}::template.{$this->view}", $this->data, $this->mergeData);
    }

    public function create()
    {
        $this->view = "{$this->part}.create";
        return $this;
    }

    public function make(string $part, array $data = [], array $mergeData = [])
    {
        $this->part = $part;
        $this->data = $data;
        $this->mergeData = $mergeData;
        return $this;
    }
}
