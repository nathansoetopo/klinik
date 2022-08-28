<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_Medis extends Model
{
    use HasFactory;
    protected $table = "riwayat_medis";
    protected $guarded = ['id'];
}
