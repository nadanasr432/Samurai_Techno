<?php

namespace App\Enums;

enum ProjectTypesEnum: string
{
    case DEVOPS = '1';
    case WEB = '2';
    case MOBILE = '3';
    case UI_UX = '4';
    case GRAPHIC = '5';
    case TESTING = '6';

    public static function options(): array
    {
        // Return an array of name-value pairs
        return [
            self::DEVOPS->value => 'DevOps',
            self::WEB->value => 'Web',
            self::MOBILE->value => 'Mobile',
            self::UI_UX->value => 'UI/UX',
            self::GRAPHIC->value => 'Graphic',
            self::TESTING->value => 'Testing',
        ];
    }
}
