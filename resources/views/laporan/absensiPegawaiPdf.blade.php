<!DOCTYPE html>
<html>
<head>
	<title>Laporan Absensi Pegawai</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th ,p{
			font-size: 12px;
		}
		.ttd{
			float: left;
			margin-top: 30px;
		}
		.ttd1{
			float: right;
			margin-top: 30px;
		}
	</style>
	<center >
		<h6>Politeknik Negeri Bali</h6>
		<h6>Jurusan Teknik Elektro</h6>
		<h6>Absensi Pegawai</h6>
	</center>
	<hr>
 
	<table class="table table-striped table-bordered">
		<thead>
			<tr  class="text-center">
				<th scope="col">No</th>
				<th scope="col">NIP</th>
				<th scope="col">Nama</th>
				<th scope="col">Hadir</th>
				<th scope="col">Sakit</th>
				<th scope="col">Izin</th>
				<th scope="col">Alpha</th>
				<th scope="col">Periode</th>
			</tr>
		</thead>
		<tbody>
			@php($no=1)
			@foreach($absen as $data)
			<tr class="text-center">
				<th scope="row">{{$no}}</th>
				<td>{{$data->nip}}</td>
				<td>{{$data->pegawai->nama}}</td>
				<td>{{$data->hadir}}</td>
				<td>{{$data->sakit}}</td>
				<td>{{$data->izin}}</td>
				<td>{{$data->alpha}}</td>
				<td>{{$data->periode}}</td>
			</tr>
			@php($no++)
			@endforeach
		</tbody>
	</table>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
