<!DOCTYPE html>
<html>
<head>
	<title>Laporan Gaji</title>
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
		<h6>Gaji Pegawai</h6>
	</center>
	<hr>
 
	<table class="table table-striped table-bordered">
		<thead>
			<tr  class="text-center">
				<th scope="col">No</th>
				<th scope="col">NIP</th>
				<th scope="col">Nama</th>
				<th scope="col">Gaji Pokok</th>
				<th scope="col">Tunjangan Tetap</th>
				<th scope="col">Tunjangan Transportasi</th>
				<th scope="col">Total Gaji</th>
				<th scope="col">Periode</th>
			</tr>
		</thead>
		<tbody>
			@php($no=1)
			@foreach($gaji as $data)
			<tr class="text-center">
				<th scope="row">{{$no}}</th>
				<td>{{$data->nip}}</td>
				<td>{{$data->pegawai->nama}}</td>
				<td>@currency($data->gaji_pokok)</td>
				<td>@currency($data->tunjangan_tetap)</td>
				<td>@currency($data->tunjangan_transportasi)</td>
				<td>@currency($data->total)</td>
				<td>{{$data->periode}}</td>
			</tr>
			@php($no++)
			@endforeach
		</tbody>
	</table>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
