<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.feedback.index',
            [
                'feedback' => Feedback::latest()->get(),
                "title" => "Admin"
            ]
        );
    }

    
    public function create()
    {
        $user = User::latest()->get();
        return view('pegawai.feedback.index', compact(['user']), [
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
            'feedback' => 'required',
            
        ]);


        Feedback::create([
            'id_pegawai' => $request->id_pegawai,
            'feedback' => $request->feedback,
            
        ]);

        return redirect('/pegawai_feedback')->with('success', 'Feedback has been added');
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
        $feedback = Feedback::where('id', $id)->first();
        $feedback->delete();
        return redirect('/feedback')->with('danger', 'Feedback has been delete');  
    }
}
