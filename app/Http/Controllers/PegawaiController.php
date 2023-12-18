<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin.pegawai.index',

            [
                'user' => User::latest()->get(),
                "title" => "Admin"
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pegawai.create', ["title" => "Admin"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nip' => 'required|unique:users,nip,' . ($request['id'] ?? '') . ',id',
            'password' => "required",
            'name' => "required",
            'email' => 'required|unique:users,email,' . ($request['id'] ?? '') . ',id',
            'telepon' => "required",
            'gender' => "required",
            'role' => "required",
            'umur' => "required",

        ]);

        User::create([

            'nip' => $request->nip,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'gender' => $request->gender,
            'role' => $request->role,
            'umur' => $request->umur,

        ]);


        return redirect('/pegawai')->with('success', 'Pegawai has been added');
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
        $user = User::where('id', $id)->first();
        return view('admin.pegawai.update', compact('user'), ["title" => "Admin"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {  
       
        $request->validate([
            'nip' => 'required|unique:users,nip,' . ($request['id'] ?? '') . ',id',
            'password' => "required",
            'name' => "required",
            'email' => 'required|unique:users,email,' . ($request['id'] ?? '') . ',id',
            'telepon' => "required",
            'gender' => "required",
            'role' => "required",
            'umur' => "required",
        ]);

        
      
        $user->where('id',$request->id)->update([
            'nip' => $request->input('nip'),
            'password' => $request->input('password') ? Hash::make($request->input('password')) : $user->password,
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'telepon' => $request->input('telepon'),
            'gender' => $request->input('gender'),
            'role' => $request->input('role'),
            'umur' => $request->umur,
        ]);

        return redirect('/pegawai')->with('success', 'Pegawai has been edited');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = User::where('id', $id)->first();
        $pegawai->delete();
        return redirect('/pegawai')->with('danger', 'Pegawai has been delete');
    }
}
