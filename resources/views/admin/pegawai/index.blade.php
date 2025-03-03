@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <section class="section">

            <div class="row mt-5">

                <div class="col-12">

                    @if (Session::has('success'))
                        <p class=" alert alert-success">{{ Session::get('success') }}</p>
                    @endif
                    @if (Session::has('warning'))
                        <p class=" alert alert-warning">{{ Session::get('warning') }}</p>
                    @endif
                    @if (Session::has('danger'))
                        <p class=" alert alert-danger">{{ Session::get('danger') }}</p>
                    @endif
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="text-white">Tabel Pegawai</h3>

                        </div>
                        <div>

                            <a href="{{ route('pegawai.create') }}" class="btn btn-lg ml-4 mb-2 mt-2 btn-success">[+]
                                Create</a>



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
                                    @if ($user->count())
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
                                                <td><a href="{{ route('pegawai.edit', $data->id) }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a> |
                                                    <form action="/pegawai/{{ $data->id }}" method="post"
                                                        class="d-inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" id="btn-hapus" class="btn btn-danger"
                                                            onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus data?')">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="9" class=" bg-secondary text-dark">
                                                <div class="d-flex justify-content-center">
                                                    Data not available
                                                </div>
                                            </td>
                                        </tr>
                                    @endif

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
