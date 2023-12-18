@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <section class="section">

            <div class="row mt-5">

                <div class="col-12">


                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="text-white">Tabel Pegawai</h3>

                        </div>
                        <div>

                            <a href="{{ route('pegawai.create') }}" class="btn btn-lg ml-4 mb-2 mt-2 btn-success">[+] Create</a>

                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>No Telepon</th>
                                        <th>Gender</th>
                                        <th>Umur</th>
                                        <th>Action</th>
                                    </tr>

                                    <?php $i = 1; ?>
                                    @foreach ($user as $data)
                                        <tr class="p-0 text-center">
                                            <td><?= $i ?></td>
                                            <td>{{ $data->nip }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->telepon }}</td>
                                            <td>{{ $data->gender }}</td>
                                            <td>{{ $data->umur }}</td>
                                            <td><a href="{{ route('pegawai.edit', $data->id) }}" class="btn btn-warning">Update</a> | 
                                                <form action="/pegawai/{{$data->id }}" method="post" class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" id="btn-hapus" class="btn btn-danger" 
                                                      onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus data?')"
                                                        >
                                                      <i class="fa-solid fa-trash"> Hapus</i>
                                                    </button>
                                                  </form>
                                                </td>
                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
