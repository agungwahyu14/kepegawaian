<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cuti extends Model
{
    use HasFactory;
    protected $table="cuti";
    protected $guarded=['id'];
    protected $fillable = [
        'id_pegawai',
        'tanggal',
        'keterangan',

    ];

    public $timestamps = false;
    public function user(){
        return $this->belongsTo(User::class,'id');
    }
}
