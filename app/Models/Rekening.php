<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rekening extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_ref_bank',
        'nama_akun',
        'no_rekening',
    ];

    public function Bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'id_ref_bank');
    }
}
