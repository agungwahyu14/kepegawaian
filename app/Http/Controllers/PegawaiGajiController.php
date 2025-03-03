<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PegawaiGajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // Ambil ID pegawai yang sedang login
        $id_pegawai = auth()->user()->id;
        // Ambil data gaji untuk pegawai yang login
        $gaji = Gaji::where('id_pegawai', $id_pegawai)->get();
        // Ambil admin pertama dari database
        $admin = User::where('role', 'admin')->first();

        return view(
            'pegawai.gaji.index',
            compact('gaji'),
            [
                'title' => 'Pegawai',
                'user' => auth()->user(), // Data pengguna yang login
                'admin_name' => $admin ? $admin->name : 'Nama Admin Tidak Tersedia' // Nama admin
            ]
        );
    }

    public function slipgajipegawaipdf(Request $request)
    {

        $gaji = Gaji::where('id', $request->id)->first();
        $user = User::where('id', $gaji->id_pegawai)->get();


        $admin = User::where('role', 'admin')->first();
        $admin_name = $admin ? $admin->name : 'Nama Admin Tidak Tersedia';
    
        // Load view dengan data tambahan
        $pdf = Pdf::loadView('pegawai.gaji.slipGajiPdf', [
            'gaji' => $gaji,
            'user' => $user,
            'admin_name' => $admin_name, // Kirim admin_name ke view
        ]);

        return $pdf->download('laporan-slip-gaji-pegawai.pdf');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
