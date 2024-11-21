<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WajibRetribusi extends Model
{
    use HasFactory;

    protected $table = 'wajib_retribusis';
    protected $fillable = ['nik', 'nama', 'no_hp', 'alamat', 'id_user'];

     // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
