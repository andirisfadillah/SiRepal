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
        'konfirmasi_bayar_id',
    ];

    public function jenisKapal(): BelongsTo
    {
        return $this->belongsTo(JenisKapal::class, 'id_jenis_kapal');
    }

    public function konfirmasiBayar(): BelongsTo
    {
        return $this->belongsTo(Konfirmasipembayaran::class, 'konfirmasi_bayar_id');
    }
}
