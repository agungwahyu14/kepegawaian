@extends('layouts.pegawai')
@section('content_pegawai')
    <div class="main-content">
        <section class="section">

            <div class="row mt-5">

                <div class="col-12">

                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="text-white">Tabel Gaji</h3>

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

                                    <?php $i = 1; ?>
                                    @foreach ($gaji as $data)
                                        <tr class="p-0 text-center">
                                            <td><?= $i ?></td>
                                            <td>{{ $data->id_pegawai }}</td>
                                            <td>{{ $data->gaji_pokok }}</td>
                                            <td>{{ $data->tunjangan_tetap }}</td>
                                            <td>{{ $data->tunjangan_transportasi }}</td>
                                            <td>{{ $data->total }}</td>
                                            <td>
                                                <a class="btn btn-primary" type="submit" id="button-addon2"
                                                    href="/pegawai/gaji/slipgajipegawaipdf/{{ $data->id }}">
                                                    <i class="fa-solid fa-print"></i> Cetak
                                                </a>
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
