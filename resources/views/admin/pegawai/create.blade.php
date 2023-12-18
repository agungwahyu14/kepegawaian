@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <section class="section">

            <div class="row mt-5">

                <div class="col-12 col-md-6 col-lg-6">


                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="text-white">Create Pegawai</h3>
                        </div>
                        <div class="col-12 mt-4">
                            <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <input type="text" name="nip" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                            </div>
                                            <input type="password" name="password" class="form-control pwstrength"
                                                data-indicator="pwindicator">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>No Telepon</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-phone"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="telepon" class="form-control phone-number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control" name="gender">
                                            <option>========</option>
                                            <option value="laki-laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                      <label>Role</label>
                                      <select class="form-control" name="role">
                                          <option>========</option>
                                          <option value="admin">Admin</option>
                                          <option value="pegawai">Pegawai</option>

                                      </select>
                                  </div>
                                   

                                    <div class="form-group">
                                        <label>Umur</label>
                                        <input type="number" name="umur" class="form-control">
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
