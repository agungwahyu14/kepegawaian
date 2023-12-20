<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\User;
use Illuminate\Http\Request;

class PegawaiCutiController extends Controller
{
    //
    public function index()
    {
        return view('pegawai.cuti.index',
            [
                "title" => "Pegawai"
            ]
        );
    }

    
    public function create()
    {
        $user = User::latest()->get();
        return view('pegawai.cuti.index', compact(['user']), [
        "title" => "Admin"
    ]);
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


        Cuti::create([
            'id_pegawai' => $request->id_pegawai,
            'tanggal' => $request->tanggal->format('Y-m-d'),
            'keterangan' => $request->keterangan,
            
        ]);

        return redirect('/pegawai_cuti')->with('success', 'Absen has been added');
    }
}
