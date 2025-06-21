<?php

namespace App\Models;

use App\Enums\DocumentTimelineAction;
use App\Enums\DocumentTypeEnum;
use Illuminate\Database\Eloquent\Model;

class DokumenTimeline extends Model
{
    protected $fillable = [
        'document_type', 'document_id', 'user_id', 'action', 'keterangan'
    ];

    protected $casts = [
        'document_type' => DocumentTypeEnum::class,
        'action' => DocumentTimelineAction::class,
    ];
    

    public function document()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
