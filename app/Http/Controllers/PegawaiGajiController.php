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
        $id_pegawai = auth()->user()->id;
        $gaji = Gaji::where('id_pegawai', $id_pegawai)->get();
        $user = User::latest()->get();
        return view(
            'pegawai.gaji.index',
            compact(['gaji']),
            [
                "title" => "Pegawai"
            ]
        );
    }

    public function slipgajipegawaipdf(Request $request)
    {

        $gaji = Gaji::where('id', $request->id)->first();
        $user = User::where('id', $gaji->id_pegawai)->get();





        $pdf = Pdf::loadView('pegawai.gaji.slipGajiPdf', ['gaji' => $gaji, 'user' => $user]);
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
