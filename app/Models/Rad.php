<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rad extends Model
{
    use HasFactory;
    protected $table = "diagnosis_rad";
    protected $guarded = ['id'];
}
