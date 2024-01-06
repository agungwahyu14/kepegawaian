@extends('layouts.pegawai')
@section('content_pegawai')
    <div class="main-content">
        <section class="section">

            <div class="row mt-5">

                <div class="col-12 col-md-6 col-lg-6">
                    @if (Session::has('success'))
                        <p class=" alert alert-success">{{ Session::get('success') }}</p>
                    @endif


                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="text-white">Create Feedback</h3>
                        </div>
                        <div class="col-12 mt-4">
                            <form action="/feedback" method="POST" enctype="multipart/form-data"">
                                @csrf
                                <div>

                                    <div class="form-group">
                                        <label>Pegawai ID</label>
                                        <select class="form-control" name="id_pegawai">
                                            <option value="{{ auth()->user()->id }}">{{ auth()->user()->name }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Feedback</label>
                                        <textarea class="form-control " name="feedback"></textarea>
                                    </div>


                                </div>
                                <div>
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
