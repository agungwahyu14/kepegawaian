<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\User;
use Illuminate\Http\Request;

class PegawaiGajiController extends Controller
{
    //
    public function index()
    {
        $user = User::latest()->get();
        return view('pegawai.gaji.index', compact(['user']),
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
            'gaji_pokok' => 'required',
            'tunjangan_tetap' => 'required',
            'tunjangan_transportasi' => 'required',
            'total' => 'required',
        ]);


        Gaji::create([
            'id_pegawai' => $request->id_pegawai,
            'gaji_pokok' => $request->gaji_pokok,
            'tunjangan_tetap' => $request->tunjangan_tetap,
            'tunjangan_transportasi' => $request->tunjangan_transportasi,
            'total' => $request->total,
        ]);


        return redirect('/pegawai_gaji')->with('success', 'Absen has been added');
    }
}
