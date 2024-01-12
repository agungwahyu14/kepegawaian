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
                            <form action="{{ route('gaji.update', $gaji->id) }}" method="POST"
                                enctype="multipart/form-data"">
                                @csrf
                                @method('PUT')
                                <div>
                                    <input type="hidden" name="id" value="{{ $gaji->id }}">
                                    <div class="form-group" readonly>
                                        <label>Pegawai ID</label>
                                        <input class="form-control" name="id_pegawai" readonly
                                            value="{{ $gaji->id_pegawai }}">
                                        </input>
                                    </div>
                                    <div class="form-group">
                                        <label>Gaji Pokok</label>
                                        <input type="text" name="gaji_pokok" class="form-control"
                                            value="{{ $gaji->gaji_pokok }}" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Tunjangan Tetap</label>
                                        <input type="text" name="tunjangan_tetap" value="{{ $gaji->tunjangan_tetap }}"
                                            class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Tunjangan Transportasi</label>
                                        <input type="text" name="tunjangan_transportasi"
                                            value="{{ $gaji->tunjangan_transportasi }}" class="form-control"required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Total </label>
                                        <input type="text" name="total" class="form-control"
                                            value="{{ $gaji->total }}" required="">
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
