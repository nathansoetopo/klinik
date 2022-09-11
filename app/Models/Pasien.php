<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "pasien";
    protected $guarded = ['id'];

    public static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            $day = Carbon::now()->format('d');
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            // $model->id .= Str::uuid()->toString();
            $model->no_reg .= 'REG' . $day . $month . $year . str_pad($model->id, 9, 0, STR_PAD_LEFT);
            $model->no_rm .= 'RM' . $day . $month . $year . str_pad($model->id, 9, 0, STR_PAD_LEFT);
            $model->save();
        });
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function resep()
    {
        return $this->hasMany(Resep::class);
    }

    public function diagnosis_lab()
    {
        return $this->hasMany(Lab::class);
    }
}
