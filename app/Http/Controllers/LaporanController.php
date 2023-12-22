<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Absen;
use App\Models\Pegawai;
use App\Models\DataGaji;
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
        $pegawai = Pegawai::latest()->get();
        return view('laporan.slipGajiPegawai',compact(['pegawai']));
    }
    
    public function slipgajipegawaipdf(Request $request){

        $periode = $request->tahun.'-'.$request->bulan;
        $gaji = DataGaji::where('nip',$request->nip)->where('periode',$periode)->get();
        $pegawai = Pegawai::where('nip',$request->nip)->get();

        if(count($gaji)===0){
            return redirect('/laporan/slipgajipegawai')->with('danger', 'Data Tidak Ada!');
        }else{
            $pdf = PDF::loadview('laporan.slipGajiPegawaiPdf',['gaji'=>$gaji,'pegawai'=>$pegawai]);
            return $pdf->download('laporan-slip-gaji-pegawai.pdf');
         }
         

    }
    public function gajipegawaipdf(Request $request){

        $periode = $request->tahun.'-'.$request->bulan;
        $gaji = DataGaji::where('periode',$periode)->get();

        if(count($gaji)===0){
            return redirect('/laporan/gajipegawai')->with('danger', 'Data Tidak Ada!');
        }else{
            $pdf = PDF::loadview('laporan.gajiPegawaiPdf',['gaji'=>$gaji]);
            return $pdf->download('laporan-gaji-pegawai.pdf');
         }

    }
    public function absensipegawaipdf(Request $request){

        $periode = $request->tahun.'-'.$request->bulan;
        $absen = Absen::where('periode',$periode)->get();

        if(count($absen)===0){
            return redirect('/laporan/absensipegawai')->with('danger', 'Data Tidak Ada!');
        }else{
            $pdf = PDF::loadview('laporan.absensiPegawaiPdf',['absen'=>$absen]);
            return $pdf->download('laporan-absensi-pegawai.pdf');
         }

    }
}
