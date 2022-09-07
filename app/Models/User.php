<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            // $model->id .= Str::uuid()->toString();
            if ($model->username == null) {
                $model->username .= 'USER' . str_pad($model->id, 9, 0, STR_PAD_LEFT);
            }
            if ($model->password == null) {
                $model->password .= Hash::make('password');
            }
            $model->save();
        });
    }

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pasien()
    {
        return $this->hasMany(Pasien::class);
    }

    public function dokter()
    {
        return $this->hasMany(Dokter::class);
    }

    public function soap()
    {
        return $this->hasMany(Soap::class);
    }
}
