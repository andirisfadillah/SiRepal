<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kapal extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'nama_kapal',
        'id_jenis_kapal',
        'ukuran',
    ];

    public function jenisKapal(): BelongsTo
    {
        return $this->belongsTo(JenisKapal::class, 'id_jenis_kapal');
    }
}
