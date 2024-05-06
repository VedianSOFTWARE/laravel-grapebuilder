<?php

namespace Vedian\Grapebuilder\Support;

use Vedian\Grapebuilder\Support\Enum\TemplatesEnum;

class TemplatesSupport
{
    public function exists(string $type)
    {
        // TODO: Make sure this templates enum will become a support package like this support file
        // TODO: See $this->view()
        return TemplatesEnum::tryFrom($type);
    }

    public function view(string $view,  array $data = [], array $mergeData = [])
    {
        // TODO: Add config file for Grapebuilder
        // TODO: Make sure this templatesupport file will become a new package
        return view("Grapebuilder::{$view}", $data, $mergeData);
    }
}
