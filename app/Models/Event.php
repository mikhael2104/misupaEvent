<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'gambar',
        'nama_event',
        'tanggal',
        'informasi',
    ];

    protected $primaryKey = 'id_event';

    public function event(): HasOne{
        return $this->hasOne(Pendaftar::class, 'id_event', 'id');
    }

    // Di model Event
    public function getGambarEventAttribute()
    {
        return asset('storage/' . $this->gambar);
    }

}
