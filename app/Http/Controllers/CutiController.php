<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cuti;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.cuti.index',
            [
                'cuti' => Cuti::latest()->get(),
                "title" => "Admin"
            ]
        );
    }

    
    public function create()
    {
        $user = User::latest()->get();
        return view('pegawai.cuti.index', compact(['user']), [
        "title" => "Pegawai"
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_pegawai' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            
        ]);


        Cuti::create([
            'id_pegawai' => $request->id_pegawai,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
            
        ]);

        return redirect('/pegawai_home')->with('success', 'Cuti has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $cuti = Cuti::where('id', $id)->first();
        $cuti->delete();
        return redirect('/feedback')->with('danger', 'Feedback has been delete');  
    }
}
