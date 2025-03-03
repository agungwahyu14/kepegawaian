<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        return view('admin.profile.index', [
            "title" => "Admin"
        ]);
    }

    public function update(Request $request)
    {
        try {
            $user = auth()->user();
            $userData = session('user_data'); // Ambil data dari session

            logger()->info('Request Data:', $request->all());

            $request->validate([
                'nip' => 'required|unique:users,nip,' . ($user->id ?? '') . ',id',
                'password' => 'nullable|string|min:8',
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . ($user->id ?? '') . ',id',
                'telepon' => 'required|string|max:20',
                'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            logger()->info('Validated Data:', $request->only(['nip', 'name', 'email', 'telepon', 'password', 'profile_picture']));

            // Gunakan data dari session jika tidak ada perubahan, atau ambil dari request jika ada
            $updateData = [
                'nip' => $request->input('nip', $userData['nip']), // Default ke session jika tidak diubah
                'name' => $request->input('name', $userData['name']),
                'email' => $request->input('email', $userData['email']),
                'telepon' => $request->input('telepon', $userData['telepon']),
                // Gunakan data dari session untuk gender, role, dan umur
                'gender' => $userData['gender'],
                'role' => $userData['role'],
                'umur' => $userData['umur'],
            ];

            // Update password hanya jika diisi
            if ($request->filled('password')) {
                $updateData['password'] = Hash::make($request->input('password'));
            } else {
                $updateData['password'] = $user->password;
            }

            // Handle upload profile picture
            if ($request->hasFile('profile_picture')) {
                if ($user->profile_picture) {
                    Storage::delete('public/' . $user->profile_picture);
                }
                $path = $request->file('profile_picture')->store('public/profile_pictures');
                $updateData['profile_picture'] = str_replace('public/', '', $path);
                logger()->info('Profile Picture Uploaded:', ['path' => $updateData['profile_picture']]);
            } else {
                $updateData['profile_picture'] = $user->profile_picture ?? $userData['profile_picture'];
            }

            logger()->info('Update Data:', $updateData);

            // Update data di database
            $affectedRows = User::where('id', $user->id)->update($updateData);

            logger()->info('Update Result:', ['affected_rows' => $affectedRows]);

            // Update session dengan data baru
            $updatedUserData = array_merge($userData, $updateData);
            $request->session()->put('user_data', $updatedUserData);

            logger()->info('Session Updated:', session('user_data'));

            return redirect()->back()->with('success', 'Profile has been updated successfully!');
        } catch (\Exception $e) {
            logger()->error('Update Profile Failed:', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->back()->with('error', 'Failed to update profile: ' . $e->getMessage());
        }
    }
}