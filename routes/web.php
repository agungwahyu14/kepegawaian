<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PegawaiCutiController;
use App\Http\Controllers\PegawaiGajiController;
use App\Http\Controllers\PegawaiAbsenController;
use App\Http\Controllers\PegawaiProfileController;
use App\Http\Controllers\PegawaiFeedbackController;

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

// Landing Page
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

Route::get('/admin', [AdminController::class, 'index']);




Route::resource('/pegawai',PegawaiController::class);
Route::resource('/absensi',AbsensiController::class);
Route::get('/cetakabsensi','AbsensiController@cetakAbsensipdf')->name('cetakabsensipdf');
Route::resource('/gaji',GajiController::class);
Route::resource('/feedback',FeedbackController::class);
Route::resource('/cuti',CutiController::class);

// End Admin


// Pegawai
Route::get('/pegawai_home', function () {
    return view('pegawai.index',[
        "title"=>"Pegawai"
    ]);
});

// Cuti
Route::get('/pegawai_cuti', function () {
    return view('pegawai.cuti.index',[
        "title"=>"Pegawai"
    ]);
});

// Feedback
Route::get('/pegawai_feedback', function () {
    return view('pegawai.feedback.index',[
        "title"=>"Pegawai"
    ]);
});


//Absensi
Route::get('/pegawai_absen', [PegawaiAbsenController::class, 'index']);
Route::post('/pegawai_absen', [PegawaiAbsenController::class, 'store']);



// Gaji
Route::get('/pegawai_gaji', [PegawaiGajiController::class, 'index']);
Route::get('/pegawai/gaji/slipgajipegawaipdf/{id}', [PegawaiGajiController::class, 'slipgajipegawaipdf']);




// End Pegawai








