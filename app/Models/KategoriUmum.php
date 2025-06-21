<?php

namespace App\Models;

use App\Enums\KategoriUmumTypeEnum;
use Illuminate\Database\Eloquent\Model;

class KategoriUmum extends Model
{
    protected $fillable = ['code', 'name', 'deskripsi', 'type'];

    protected $casts = [
        'type' => KategoriUmumTypeEnum::class, // cast otomatis ke enum
    ];


    public function suratMasuk()
    {
        return $this->hasMany(SuratMasuk::class);
    }

    public function suratKeluar()
    {
        return $this->hasMany(SuratKeluar::class);
    }

    public function memoInternal()
    {
        return $this->hasMany(MemoInternal::class);
    }
}
