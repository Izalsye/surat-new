<?php

namespace App\Models;

use App\Enums\DisposisiSifatEnum;
use Illuminate\Database\Eloquent\Model;

class DisposisiMemo extends Model
{
    protected $fillable = [
        'memo_internal_id', 'pengirim_id', 'penerima_id', 'pesan', 'status',
        'sifat', 'balasan', 'tenggat', 'parent_id'
    ];

    protected $casts = [
        'sifat' => DisposisiSifatEnum::class,
    ];

    public function memoInternal()
    {
        return $this->belongsTo(MemoInternal::class);
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

    public function dokumenTimelines()
    {
        return $this->morphMany(DokumenTimeline::class, 'document');
    }
}
