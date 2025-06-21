<?php

namespace App\Enums;

enum DocumentTimelineAction:string
{
    case Dibuat = 'dibuat';
    case Diteruskam = 'diteruskan';
    case Dibalas = 'dibalas';
    case Divalidasi = 'divalidasi';
    case Direferensikan = 'direferensikan';
    case Diarsipkan = 'diarsipkan';
    case Rejected = 'rejected';
    case Perbaikan = 'perbaikan';

    public static function Values():array
    {
        return array_column(self::cases(), 'value');
    }

    public static function labels():array
    {
        return [
            self::Dibuat->value => 'dibuat',
            self::Diteruskam->value => 'diteruskan',
            self::Dibalas->value => 'dibalas',
            self::Divalidasi->value => 'divalidasi',
            self::Direferensikan->value => 'direferensika',
            self::Diarsipkan->value => 'diarsipkan',
            self::Rejected->value => 'rejected',
            self::Perbaikan->value => 'perbaikan',
        ];
    }
}
