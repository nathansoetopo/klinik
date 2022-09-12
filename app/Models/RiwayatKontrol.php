<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKontrol extends Model
{
    use HasFactory;

    protected $table = "riwayat_kontrol";
    protected $guarded = ['id'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id');
    }
}
