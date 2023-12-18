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
    <form class="row g-3" method="post" action="/dataabsen">
      @csrf
      <div class="col-md-12">
        <label for="nip" class="form-label">NIP</label>
        <input type="text" class="form-control" id="nip" name="nip">
      </div>
      <div class="col-md-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="hadir" id="flexCheckDefault" name="hadir">
          <label class="form-check-label" for="flexCheckDefault">
            Hadir
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="sakit" id="flexCheckChecked" name="sakit">
          <label class="form-check-label" for="flexCheckChecked">
            Sakit
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="izin" id="flexCheckChecked" name="izin">
          <label class="form-check-label" for="flexCheckChecked">
            Izin
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
      </div>
    </form>
  </div>

</div>

@endsection
