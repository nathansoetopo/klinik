<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_Kontrol extends Model
{
    use HasFactory;
    protected $table = "riwayat_kontrol";
    protected $guarded = ['id'];
}
