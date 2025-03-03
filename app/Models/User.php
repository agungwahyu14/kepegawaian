<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Cuti;
use App\Models\Gaji;
use App\Models\Absensi;
use App\Models\Feedback;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nip',
        'password',
        'name',
        'email',
        'telepon',
        'gender',
        'role',
        'umur',
        'profile_picture'
    ];

    public function gaji() {
        return $this->hasMany(Gaji::class);
    }
    public function absensi() {
        return $this->hasMany(Absensi::class);
    }
    public function cuti() {
        return $this->hasMany(Cuti::class);
    }
    public function feedback() {
        return $this->hasMany(Feedback::class);
    }


    public $timestamps = false;

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
        'password' => 'hashed',
    ];
}
