<!DOCTYPE html>
<html>

<head>
    <title>Laporan Slip Gaji</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th,
        p {
            font-size: 12px;
        }

        .ttd {
            float: left;
            margin-top: 30px;
        }

        .ttd1 {
            float: right;
            margin-top: 30px;
        }
    </style>
    <center>
        <h6>Sistem Kepegawaian</h6>
        <h6>Sistem Informasi</h6>
        <h6>Slip Gaji Pegawai</h6>
    </center>
    <hr>

    <div class="d-flex gap-0">

        <p>Nama Pegawai : <span>{{ auth()->user()->name }}</span></p>
        <p>Pegawai Id : <span>{{ auth()->user()->id }}</span></p>

    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <th scope="row">1</th>
                <td>Gaji Pokok</td>
                <td>Rp {{ number_format($gaji->gaji_pokok, 0, ',', '.') }}</td>
            </tr>
            <tr class="text-center">
                <th scope="row">2</th>
                <td>Tunjangan Tetap</td>
                <td>Rp {{ number_format($gaji->tunjangan_tetap, 0, ',', '.') }}</td>
            </tr>
            <tr class="text-center">
                <th scope="row">3</th>
                <td>Tunjangan Transportasi</td>
                <td>Rp {{ number_format($gaji->tunjangan_transportasi, 0, ',', '.') }}</td>
            </tr>
            <tr class="text-center">
                <th scope="row">4</th>
                <td>Potongan BPJS</td>
                <td>Rp {{ number_format($gaji->potongan_bpjs, 0, ',', '.') }}</td>
            </tr>
            <tr class="text-center">
                <th scope="row">5</th>
                <td>Potongan Pajak</td>
                <td>Rp {{ number_format($gaji->potongan_pajak, 0, ',', '.') }}</td>
            </tr>
            <tr class="text-center">
                <td colspan="2"><strong>Total Gaji Bersih</strong></td>
                <td><strong>Rp {{ number_format($gaji->total, 0, ',', '.') }}</strong></td>
            </tr>
        </tbody>
    </table>

    <div>
        <div class="ttd">
            <p>Pegawai</p>
            <br><br>
            <p>{{ auth()->user()->name }}</p>
        </div>
        <div class="ttd1">
            <p>Gianyar, {{ now()->format('d F Y') }}</p>
            <p>Atasan</p>
            <br><br>
            <p>{{ $admin_name }}</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
