<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Absensi;
use Illuminate\Http\Request;

class PegawaiAbsenController extends Controller
{

    public function index()
    {
        return view('pegawai.absen.index',
            [
                'absensi' => Absensi::latest()->get(),
                "title" => "Pegawai"
            ]
        );
    }
    
    public function create()
    {
        $user = User::latest()->get();
        return view('pegawai.absen.index', compact(['user']), [
        "title" => "Pegawai"
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $request->validate([
            'id_pegawai' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            
        ]);


        Absensi::create([
            'id_pegawai' => $request->id_pegawai,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
            
        ]);

        return redirect('/pegawai_home')->with('success', 'Absen has been added');
    }
}
