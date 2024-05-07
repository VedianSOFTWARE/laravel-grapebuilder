<?php

namespace Vedian\Grapebuilder\Support\Enum;

enum TemplateEnum: string
{
    case HEADER = 'header';
    case FOOTER = 'footer';
    case SECTION = 'section';

    public static function toArray()
    {
        return array_map(function ($case) {
            return $case->value;
        }, self::cases());
    }
}
