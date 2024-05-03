<?php

namespace Vediansoftware\Grapebuilder\Support;

enum LayoutPartEnum: string
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
