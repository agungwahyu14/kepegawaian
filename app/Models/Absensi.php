<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table="absensi";
    protected $guarded=['id'];
    protected $fillable = [
        'id_pegawai',
        'tanggal',
        'keterangan',

    ];


    public function pegawai(){
        return $this->belongsTo(User::class,'id');
    }
}
