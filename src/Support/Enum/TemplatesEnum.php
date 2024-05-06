<?php

namespace Vedian\Grapebuilder\Support\Enum;

enum TemplatesEnum: string
{
    case HEADER = 'header';
    case FOOTER = 'footer';

    public static function toArray()
    {
        return array_map(function ($case) {
            return $case->value;
        }, self::cases());
    }
}
