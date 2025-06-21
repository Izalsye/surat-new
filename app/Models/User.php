<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'sub_jabatan',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function suratMasuk()
    {
        return $this->hasMany(SuratMasuk::class, 'created_by_id');
    }

    public function suratKeluar()
    {
        return $this->hasMany(SuratKeluar::class, 'created_by_id');
    }

    public function memoInternal()
    {
        return $this->hasMany(MemoInternal::class, 'created_by_id');
    }

    public function disposisiPengirim()
    {
        return $this->hasMany(Disposisi::class, 'pengirim_id');
    }

    public function disposisiPenerima()
    {
        return $this->hasMany(Disposisi::class, 'penerima_id');
    }

    public function disposisiMemoPengirim()
    {
        return $this->hasMany(DisposisiMemo::class, 'pengirim_id');
    }

    public function disposisiMemoPenerima()
    {
        return $this->hasMany(DisposisiMemo::class, 'penerima_id');
    }

    public function dokumenTimelines()
    {
        return $this->hasMany(DokumenTimeline::class);
    }
}
