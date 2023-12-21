<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{
    use HasFactory;
    protected $table="feedback";
    protected $guarded=['id'];
    protected $fillable = [
        'id_pegawai',
        'feedback',
    ];

    public $timestamps = false;
    public function user(){
        return $this->belongsTo(User::class,'id');
    }
}
