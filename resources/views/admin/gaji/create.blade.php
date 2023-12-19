@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <section class="section">

            <div class="row mt-5">

                <div class="col-12 col-md-6 col-lg-6">


                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="text-white">Create Gaji</h3>
                        </div>
                        <div class="col-12 mt-4">
                            <form action="/gaji" method="POST" enctype="multipart/form-data"">
                                @csrf
                                <div>

                                    <div class="form-group">
                                        <label>NIP</label>
                                        <select class="form-control" name="id_pegawai">
                                            @foreach ($user as $data)
                                                <option value="{{ $data->id }}">{{ $data->nip }} -
                                                    {{ $data->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Gaji Pokok</label>
                                        <input type="text" name="gaji_pokok" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Tunjangan Tetap</label>
                                        <input type="text" name="tunjangan_tetap" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Tunjangan Transportasi</label>
                                        <input type="text" name="tunjangan_transportasi" class="form-control"required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Total </label>
                                        <input type="text" name="total" class="form-control" required="">
                                    </div>

                                </div>
                                <div>
                                    <a href="/gaji" class="btn btn-danger mt-3 mb-3 text-white">Batal</a>
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
