<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
     protected $fillable = [
        'no_surat', 'no_agenda', 'tgl_surat', 'penerima', 'instansi',
        'perihal', 'isi', 'summary', 'file', 'status', 'kategori_umum_id', 'created_by_id',
        'disposisi_id', 'surat_masuk_id', 'memo_internal_id'
    ];

    public function kategoriUmum()
    {
        return $this->belongsTo(KategoriUmum::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    public function disposisi()
    {
        return $this->belongsTo(Disposisi::class);
    }

    public function suratMasuk()
    {
        return $this->belongsTo(SuratMasuk::class);
    }

    public function memoInternal()
    {
        return $this->belongsTo(MemoInternal::class);
    }

    public function dokumenTimelines()
    {
        return $this->morphMany(DokumenTimeline::class, 'document');
    }
}
