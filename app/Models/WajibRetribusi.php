<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WajibRetribusi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'telepon',
        'nik',
        'alamat',
        'kelurahan',
        'status',
        'tindaklanjut_tgl',
        'tindaklanjut_user',
    ];
}
