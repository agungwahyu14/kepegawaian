<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.absen.index',
            [
                'absensi' => Absensi::latest()->get(),
                "title" => "Admin"
            ]
        );
    }

    
    public function create()
    {
        $user = User::latest()->get();
        return view('admin.absen.create', compact(['user']), [
        "title" => "Admin"
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

        return redirect('/absensi')->with('success', 'Absen has been added');
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
        $user = User::latest()->get();
        $absensi = Absensi::where('id', $id)->first();
        return view('admin.absen.update', compact('absensi','user'), ["title" => "Admin"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absensi $absensi)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
        ]);

        
      
        $absensi->where('id',$request->id)->update([
            'id_pegawai' => $request->id_pegawai,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
            
        ]);

        return redirect('/absensi')->with('success', 'Absen has been edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $absensi = Absensi::where('id', $id)->first();
        $absensi->delete();
        return redirect('/absensi')->with('danger', 'Pegawai has been delete');  
    }
}
