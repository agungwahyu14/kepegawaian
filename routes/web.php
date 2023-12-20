<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CutiController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',function(){
    return view('landing-page.index',[
    "title"=>"Sistem Informasi Kepegawaian"
    ]);
});
  
// // Login Logout
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Admin
Route::get('/admin', function () {
    return view('admin.index',[
        "title"=>"Admin"
    ]);
});

Route::get('/profile', function () {
    return view('admin.profile.index',[
        "title"=>"Admin"
    ]);
});

Route::resource('/pegawai',PegawaiController::class);
Route::resource('/absensi',AbsensiController::class);
Route::resource('/gaji',GajiController::class);
Route::resource('/feedback',FeedbackController::class);
Route::resource('/cuti',CutiController::class);


// Pegawai
Route::get('/pegawai_home', function () {
    return view('pegawai.index',[
        "title"=>"Pegawai"
    ]);
});
Route::get('/pegawai_absen', function () {
    return view('pegawai.absen.index',[
        "title"=>"Pegawai"
    ]);
});
Route::get('/pegawai_cuti', function () {
    return view('pegawai.cuti.index',[
        "title"=>"Pegawai"
    ]);
});
Route::get('/pegawai_feedback', function () {
    return view('pegawai.feedback.index',[
        "title"=>"Pegawai"
    ]);
});
Route::get('/pegawai_gaji', function () {
    return view('pegawai.gaji.index',[
        "title"=>"Pegawai"
    ]);
});










// End Admin

// Pegawai








