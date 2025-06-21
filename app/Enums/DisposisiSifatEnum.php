<?php

namespace App\Enums;


enum DisposisiSifatEnum: string
{
    case Biasa = 'biasa';
    case Urgent = 'segera';
    case Rahasia = 'rahasia';

    public static function Values(): array
    {
        return array_column(self::cases(), 'value');
    }

    // Untuk menampilkan label (misal di dropdown atau API response)
    public static function labels(): array
    {
        return [
            self::Biasa->value => 'biasa',
            self::Urgent->value => 'segera',
            self::Rahasia->value => 'rahasia',
        ];
    }
}
