<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medicine extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'medicines';
    protected $guarded = ['id'];

    public function resep()
    {
        return $this->hasMany(Resep::class);
    }
}
