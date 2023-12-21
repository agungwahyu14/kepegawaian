@extends('layouts.pegawai')
@section('content_pegawai')
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
                                        <label>Pegawai ID</label>
                                        <select class="form-control" name="id_pegawai">
                                            @foreach ($user as $data)
                                                <option value="{{ $data->id }}">{{ $data->nip }} -
                                                    {{ $data->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    

                                </div>
                                <div>
                                    
                                    <button type="submit" class="btn btn-primary mt-3 mb-3">Cetak</button>
                        </div>
                        </form>

                    </div>


                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
