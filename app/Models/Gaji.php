<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gaji extends Model
{
    use HasFactory;
    protected $table = 'gaji';
    protected $guarded = ['id'];
    protected $fillable = [
        'id_pegawai',
        'gaji_pokok',
        'tunjangan_tetap',
        'tunjangan_transportasi',
        'total',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
