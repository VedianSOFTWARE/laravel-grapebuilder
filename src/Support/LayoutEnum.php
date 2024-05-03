<?php

namespace Vediansoftware\Grapebuilder\Support;

enum LayoutEnum: string
{
    case HEADER = 'header';
    case FOOTER = 'footer';
    case MENU = 'menu';

    public static function toArray()
    {
        return array_map(function ($case) {
            return $case->value;
        }, self::cases());
    }
}
