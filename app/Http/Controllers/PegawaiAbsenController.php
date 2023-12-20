<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Absensi;
use Illuminate\Http\Request;

class PegawaiAbsenController extends Controller
{
    //
    
    public function index()
    {
        $user = User::latest()->get();
        return view('pegawai.absen.index',compact(['user']),
            [
                "title" => "Pegawai"
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'id_pegawai' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            
        ]);


        Absensi::create([
            'id_pegawai' => $request->id_pegawai,
            'tanggal' => Carbon::now($request->tanggal)->format('Y-m-d'),
            'keterangan' => $request->keterangan,
            
        ]);

        return redirect('/pegawai_absen')->with('success', 'Absen has been added');
    }
}
