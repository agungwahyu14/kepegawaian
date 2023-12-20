@extends('layouts.admin')
@section('content')
<div class="main-content">
  <section class="section">

      <div class="row mt-5">

          <div class="col-12 col-md-6 col-lg-6">


              <div class="card">
                  <div class="card-header bg-primary">
                      <h3 class="text-white">Update Absen</h3>
                  </div>
                  <div class="col-12 mt-4">
                      <form action="{{ route('absensi.update', $absensi->id)}}" method="POST" enctype="multipart/form-data"">
                        @csrf
                        @method('PUT')
                        <div>
                        <input type="hidden" name="id" value="{{ $absensi->id }}">
                          <div class="form-group" readonly>
                              <label>Pegawai ID</label>
                              <input class="form-control" name="id_pegawai" readonly value="{{ $absensi->id_pegawai }}">
                                  

                              </input>
                          </div>
                          <div class="form-group">
                              <label>Tanggal</label>
                              <input type="date" name="tanggal" class="form-control" required="" value="{{ $absensi->tanggal }}">
                          </div>
                          <div class="form-group">
                              <label>Keterangan</label>
                              <select class="form-control" name="keterangan">
                                  <option>========</option>
                                  <option value="hadir"{{ $absensi->keterangan == 'hadir' ? 'selected' : '' }}>Hadir</option>
                                  <option value="sakit"{{ $absensi->keterangan == 'sakit' ? 'selected' : '' }}>Sakit</option>
                                  <option value="alpha"{{ $absensi->keterangan == 'alpha' ? 'selected' : '' }}>Alpha</option>
                                  <option value="ijin"{{ $absensi->keterangan == 'ijin' ? 'selected' : '' }}>Ijin</option>


                              </select>
                          </div>

                      </div>
                      <div>
                          <a href="/absensi" class="btn btn-danger mt-3 mb-3 text-white">Batal</a>
                          <button type="submit" name="submit" class="btn btn-primary mt-3 mb-3">Submit</button>
              </div>
                  </form>

              </div>


          </div>
      </div>
</div>
</section>
</div>
@endsection
