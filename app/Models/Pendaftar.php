<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pendaftar extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama',
        'email',
        'tanggal_lahir',
        'alamat',
        'id_event'
    ];

    protected $primaryKey = 'id_pendaftar';

    public function event(): BelongsTo{
        return $this->belongsTo(Event::class, 'id_event', 'id_event');
    }
}
