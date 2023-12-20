<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;

class PegawaiFeedbackController extends Controller
{
    //
    public function index()
    {
        $user = User::latest()->get();
        return view('pegawai.feedback.index',compact(['user']),
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


        Feedback::create([
            'id_pegawai' => $request->id_pegawai,
            'tanggal' => $request->tanggal->format('Y-m-d'),
            'keterangan' => $request->keterangan,
            
        ]);

        return redirect('/pegawai_feedback')->with('success', 'Absen has been added');
    }
}
