<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Gaji;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.gaji.index',
            ['gaji'=>Gaji::latest()->get(),
            "title" => "Admin"
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::latest()->get();
        return view('admin.gaji.create', compact(['user']), [
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

        return redirect('/gaji')->with('success', 'Gaji has been added');
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
    }
}
