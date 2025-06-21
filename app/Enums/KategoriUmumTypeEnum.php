<?php

namespace App\Enums;

enum KategoriUmumTypeEnum: string
{
    case Internal = 'internal';
    case External = 'external';

    // Untuk migration atau penggunaan lain
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    // Untuk menampilkan label (misal di dropdown atau API response)
    public static function labels(): array
    {
        return [
            self::Internal->value => 'Internal',
            self::External->value => 'External',
        ];
    }
}