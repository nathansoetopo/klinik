<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokter extends Model
{
    use HasFactory;
    protected $table = "dokter";
    protected $guarded = ['id'];

    public static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            $day = Carbon::now()->format('d');
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            // $model->id .= Str::uuid()->toString();
            $model->no_doc .= 'DOC' . $day . $month . $year . str_pad($model->id, 9, 0, STR_PAD_LEFT);
            $model->save();
        });
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
