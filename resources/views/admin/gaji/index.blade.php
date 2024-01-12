@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <section class="section">

            <div class="row mt-5">

                <div class="col-12">
                    @if (Session::has('success'))
                        <p class=" alert alert-success">{{ Session::get('success') }}</p>
                    @endif
                    @if (Session::has('danger'))
                        <p class=" alert alert-danger">{{ Session::get('danger') }}</p>
                    @endif
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="text-white">Tabel Gaji</h3>

                        </div>
                        <div>
                            <a href="{{ route('gaji.create') }}" class="btn btn-lg ml-4 mb-2 mt-2 btn-success">[+] Create</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Pegawai ID</th>
                                        <th>Gaji Pokok</th>
                                        <th>Tunjangan Tetap</th>
                                        <th>Tunjangan Transportasi</th>
                                        <th>Total</th>
                                        <th>Action</th>

                                    </tr>
                                    @if ($gaji->count())
                                        <?php $i = 1; ?>
                                        @foreach ($gaji as $data)
                                            <tr class="p-0 text-center">
                                                <td><?= $i ?></td>
                                                <td>{{ $data->id_pegawai }}</td>
                                                <td>{{ $data->gaji_pokok }}</td>
                                                <td>{{ $data->tunjangan_tetap }}</td>
                                                <td>{{ $data->tunjangan_transportasi }}</td>
                                                <td>{{ $data->total }}</td>
                                                <td><a href="{{ route('gaji.edit', $data->id) }}"
                                                        class="btn btn-warning"> <i
                                                            class="fa-solid fa-pen-to-square"></i></a> |
                                                    <form action="/gaji/{{ $data->id }}" method="post"
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
