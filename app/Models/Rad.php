<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rad extends Model
{
    use HasFactory;
    protected $table = "diagnosis_rad";
    protected $guarded = ['id'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id');
    }
}
