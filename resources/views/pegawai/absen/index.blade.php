@extends('layouts.pegawai')
@section('content_pegawai')
<div class="main-content">
    <section class="section">

        <div class="row mt-5">

            <div class="col-12 col-md-6 col-lg-6">


                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">Create Absen</h3>
                    </div>
                    <div class="col-12 mt-4">
                        <form action="/pegawai_absen" method="POST" enctype="multipart/form-data"">
                        @csrf
                        <div>

                            <div class="form-group">
                                <label>Pegawai ID</label>
                                <select class="form-control" name="id_pegawai">
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->nip }} -
                                            {{ $data->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <select class="form-control" name="keterangan">
                                    <option>========</option>
                                    <option value="hadir">Hadir</option>
                                    <option value="sakit">Sakit</option>
                                    <option value="alpha">Alpha</option>
                                    <option value="ijin">Ijin</option>


                                </select>
                            </div>

                        </div>
                        <div>
                            <a href="/absensi" class="btn btn-danger mt-3 mb-3 text-white">Batal</a>
                            <button type="submit" class="btn btn-primary mt-3 mb-3">Submit</button>
                </div>
                    </form>

                </div>


            </div>
        </div>
</div>
</section>
</div>
@endsection
