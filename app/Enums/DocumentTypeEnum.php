<?php

namespace App\Enums;

enum DocumentTypeEnum:string
{
    case SuratMasuk = 'surat_masuk';
    case SuratKeluar = 'surat_keluar';
    case MemoInternal = 'memo_internal';
    case Disposisi = 'disposisi';
    case DisposisiMemo = 'disposisi_memo';

    public static function Values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function labels(): array
    {
        return [
            self::SuratMasuk->value => 'surat_masuk',
            self::SuratKeluar->value => 'surat_keluar',
            self::MemoInternal->value => 'memo_internal',
            self::Disposisi->value => 'disposisi',
            self::DisposisiMemo->value => 'disposisi_memo',
        ];
    }
}
