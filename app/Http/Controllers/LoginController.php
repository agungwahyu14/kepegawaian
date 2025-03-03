<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */

    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Simpan data pengguna ke session
            $user = auth()->user();
            $request->session()->put('user_data', [
                'id' => $user->id,
                'nip' => $user->nip,
                'name' => $user->name,
                'email' => $user->email,
                'telepon' => $user->telepon,
                'gender' => $user->gender,
                'role' => $user->role,
                'umur' => $user->umur,
                'profile_picture' => $user->profile_picture,
            ]);

            // Log untuk debugging (opsional)
            logger()->info('User Logged In and Session Data Stored:', session('user_data'));

            // Redirect berdasarkan role
            if ($user->role == 'admin') {
                return redirect('/admin')->with('message', 'Anda Berhasil Login Sebagai Admin');
            }
            return redirect('/pegawai_home')->with('message', 'Anda Berhasil Login Sebagai Pegawai');
        }

        return back()->with('message', 'Anda Gagal Login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Hapus data session saat logout
        $request->session()->forget('user_data');

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}