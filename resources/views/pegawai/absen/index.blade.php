@extends('layout.index')
@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4 mt-3">
        <h1 class="h3 mb-2 text-gray-800">Data Absen</h1>
        <a href="/dataabsen/create" class="btn btn-success btn-circle">
            <span class="icon text-white">
                <i class="fa-solid fa-plus"></i>
            </span>
        </a>

    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="row g-3">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-primary">Table Data Absen</h6>
                </div>
                <div class="col-md-6">
                    <form class="input-group row g-3" action="/dataabsen">
                        <div class="col-md-5">
                            <label for="tahun">Tahun</label>
                            <select class="form-select" name="tahun">
                                <option value="2023">2023</option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <label for="bulan">Bulan</label>
                            <select class="form-select" name="bulan">
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                        <div class="col-md-2 mt-5">
                            <button class="btn btn-primary" type="submit" id="button-addon2"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-header py-3 ">
            <div class="row g-3">
                <div class="col-md-0">
                    <h6 class="m-0 font-weight-bold text-light">Table Data Absen</h6>
                </div>
                <div class="col-md-12">
                    <form class="input-group mb-3" action="/dataabsen">
                        <input type="text" class="form-control" placeholder="Ketikan Keyword...." id="search"
                            name="search">
                        <button class="btn btn-primary" type="submit" id="button-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <a href="/dataabsen" class="btn btn-danger float-end">
                        <i class="fa-solid fa-arrows-rotate"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @elseif ($message = Session::get('danger'))
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">NIP</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Hadir</th>
                            <th class="text-center">Sakit</th>
                            <th class="text-center">izin</th>
                            <th class="text-center">Alpha</th>
                            <th class="text-center">Periode</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($absen->count())
                            @php($no = 1)
                            @foreach ($absen as $data)
                                <tr>
                                    <td class="text-center">{{ $no }}</td>
                                    <td class="text-center">{{ $data->nip }}</td>
                                    <td class="text-center">{{ ucfirst($data->pegawai->nama) }}</td>
                                    <td class="text-center">{{ $data->hadir }}</td>
                                    <td class="text-center">{{ $data->sakit }}</td>
                                    <td class="text-center">{{ $data->izin }}</td>
                                    <td class="text-center">{{ $data->alpha }}</td>
                                    <td class="text-center">{{ $data->periode }}</td>
                                    <td class="text-center">
                                        <a href="/dataabsen/{{ $data->id }}/edit" class="btn btn-primary"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <form action="/dataabsen/{{ $data->id }}" method="post" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" id="btn-hapus" class="btn btn-danger"
                                                onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus data?')">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @php($no++)
                            @endforeach
                        @else
                            <tr>
                                <td colspan="9" class="bg-secondary text-light">
                                    <div class="d-flex justify-content-center">
                                        Data not available
                                    </div>
                                </td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
