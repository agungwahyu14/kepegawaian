<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Gaji;
use App\Models\Absensi;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $pegawai = Pegawai::where('role','pegawai')->count();
        $absensi = Absensi::count();
        $gaji = Gaji::count();
        $cuti = Cuti::count();
        

        return view('admin.index',compact('pegawai','absensi' ,'gaji','cuti'),[
            "title"=>"Admin"
        ]);
    }
}
