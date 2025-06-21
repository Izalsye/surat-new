<?php

namespace App\Models;

use App\Enums\DisposisiSifatEnum;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    protected $fillable = [
        'surat_masuk_id', 'pengirim_id', 'penerima_id', 'pesan', 'status',
        'sifat', 'balasan', 'tenggat', 'parent_id'
    ];

    protected $casts = [
        'sifat' => DisposisiSifatEnum::class,
    ];

    public function suratMasuk()
    {
        return $this->belongsTo(SuratMasuk::class);
    }

    public function pengirim()
    {
        return $this->belongsTo(User::class, 'pengirim_id');
    }

    public function penerima()
    {
        return $this->belongsTo(User::class, 'penerima_id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function suratKeluars()
    {
        return $this->hasMany(SuratKeluar::class);
    }

    public function dokumenTimelines()
    {
        return $this->morphMany(DokumenTimeline::class, 'document');
    }
}
