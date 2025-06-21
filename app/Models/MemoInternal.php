<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemoInternal extends Model
{
    protected $fillable = [
        'no_surat', 'no_agenda', 'tgl_surat', 'pengirim', 'instansi',
        'perihal', 'isi', 'summary', 'file', 'status', 'kategori_umum_id',
        'created_by_id', 'parent_id'
    ];

    public function kategoriUmum()
    {
        return $this->belongsTo(KategoriUmum::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function disposisiMemos()
    {
        return $this->hasMany(DisposisiMemo::class);
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
