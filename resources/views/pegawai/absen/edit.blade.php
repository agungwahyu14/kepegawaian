@extends('layout.index')
@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4 mt-3">
        <h1 class="h3 mb-2 text-gray-800">Data Absen</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Data Jabatan</h6>
        </div>
        <div class="card-body">
            <form class="row g-3" method="post" action="{{ route('dataabsen.update', $absen->id) }}">
                @csrf
                @method('PUT')
                <div class="col-md-12">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" value={{ $absen->nip }}>
                </div>
                <div class="col-md-3">
                    <label for="hadir" class="form-label">Hadir</label>
                    <input type="number" class="form-control" id="hadir" name="hadir" value={{ $absen->hadir }}>
                </div>
                <div class="col-md-3">
                    <label for="sakit" class="form-label">Sakit</label>
                    <input type="number" class="form-control" id="sakit" name="sakit" value={{ $absen->sakit }}>
                </div>
                <div class="col-md-3">
                    <label for="izin" class="form-label">Izin</label>
                    <input type="number" class="form-control" id="izin" name="izin" value={{ $absen->izin }}>
                </div>
                <div class="col-md-3">
                    <label for="alpha" class="form-label">Alpha</label>
                    <input type="number" class="form-control" id="alpha" name="alpha" value={{ $absen->alpha }}>
                </div>
                <div class="col-md-12">
                    <label for="periode" class="form-label">Periode</label>
                    <input type="text" class="form-control" id="periode" name="periode" value={{ $absen->periode }}>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="tambah">Update</button>
                </div>
            </form>
        </div>

    </div>
@endsection
