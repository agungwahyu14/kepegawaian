<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\User;
use App\Models\Gaji;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LaporanController extends Controller
{
    public function gajipegawai(){
        return view('laporan.gajiPegawai');
    }

    public function absensipegawai(){
        return view('laporan.absensiPegawai');
    }


    public function slipgajipegawai(){
        $user = User::latest()->get();
        return view('laporan.slipGajiPegawai',compact(['user']));
    }
    
    public function slipgajipegawaipdf(Request $request){

        $gaji = Gaji::where('id',$request->id)->get();
        $user = User::where('id',$request->id_pegawai)->get();

        if(count($gaji)===0){
            return redirect('/laporan/slipgajipegawai')->with('danger', 'Data Tidak Ada!');
        }else{
            $pdf = PDF::loadview('laporan.slipGajiPegawaiPdf',['gaji'=>$gaji,'pegawai'=>$user]);
            return $pdf->download('laporan-slip-gaji-pegawai.pdf');
         }
         

    }
    public function gajipegawaipdf(Request $request){

        $periode = $request->tahun.'-'.$request->bulan;
        $gaji = Gaji::where('periode',$periode)->get();

        if(count($gaji)===0){
            return redirect('/laporan/gajipegawai')->with('danger', 'Data Tidak Ada!');
        }else{
            $pdf = PDF::loadview('laporan.gajiPegawaiPdf',['gaji'=>$gaji]);
            return $pdf->download('laporan-gaji-pegawai.pdf');
         }

    }
    public function absensipegawaipdf(Request $request){

        $periode = $request->tahun.'-'.$request->bulan;
        $absen = Absensi::where('periode',$periode)->get();

        if(count($absen)===0){
            return redirect('/laporan/absensipegawai')->with('danger', 'Data Tidak Ada!');
        }else{
            $pdf = PDF::loadview('laporan.absensiPegawaiPdf',['absen'=>$absen]);
            return $pdf->download('laporan-absensi-pegawai.pdf');
         }

    }
}
