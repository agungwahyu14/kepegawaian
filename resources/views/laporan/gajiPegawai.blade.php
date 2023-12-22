
@extends('layout.index')
@section('content')
<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4 mt-3">
    <h1 class="h3 mb-2 text-gray-800">Laporan Gaji Pegawai</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 ">
      @if ($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        {{$message}}
      </div>
      @elseif ($message = Session::get('danger'))
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
    @endif
          <form class="input-group row g-3" action="/laporan/gajipegawaipdf">
            <div class="col-md-12">
              <label for="tahun">Tahun</label>
              <select class="form-select" name="tahun">
                <option value="2023">2023</option>
              </select>
            </div>
            <div class="col-md-12">
              <label for="bulan">Bulan</label>
              <select class="form-select" name="bulan">
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <option value="04">April</option>
                <option value="05">Mei</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">Agustus</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
              </select>
            </div>
            <div class="col-md-2 mt-12">
              <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fa-solid fa-print"></i>  Cetak</button>
            </div>
          </form>
    </div>
</div>

@endsection