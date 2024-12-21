<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelurahan extends Model
{
    protected $table = 'kelurahan';
    protected $fillable = ['nama_kelurahan'];

    public function WajibRetribusi()
    {
        return $this->HasMany(WajibRetribusi::class,'id_kelurahan');
    }
}
