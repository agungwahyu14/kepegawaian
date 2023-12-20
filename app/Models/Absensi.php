<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absensi extends Model
{
    use HasFactory;

    protected $table="absensi";
    protected $guarded=['id'];
    protected $fillable = [
        'id_pegawai',
        'tanggal',
        'keterangan',

    ];


    public function user(){
        return $this->belongsTo(User::class,'id');
    }
}
