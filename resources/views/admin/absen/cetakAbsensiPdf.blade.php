<!DOCTYPE html>
<html>
<head>
	<title>Laporan  Absensi</title>
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
		<h6>Sistem Kepegawaian</h6>
		<h6>Sistem Informasi</h6>
		<h6>Absensi Pegawai</h6>
	</center>
	<hr>
 
	<table class="table table-striped table-bordered">
		<thead>
			<tr  class="text-center">
				<th scope="col">No</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Keterangan</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-center">
				<th scope="row">1</th>
				
				<td>{{ $absensi->id_pegawai }}</td>
				<td>{{ $absensi->keterangan }}</td>
			</tr>
			<tr class="text-center">
				<th scope="row">2</th>
				
				<td>@currency($absensi->tunjangan_tetap)</td>
			</tr>
			<tr class="text-center">
				<th scope="row">3</th>
				
				<td>@currency($absensi->tunjangan_transportasi)</td>
			</tr>
      
		</tbody>
	</table>

  <div>
    <div class="ttd">
			@foreach($user as $data)
      <p class="text-center">Pegawai</p>
      <br>
      <br>
    	<p>{{$data->name}}</p>
			@endforeach
    </div>
    <div class="ttd1">
      <p class="text-center">...........,.................</p>
      <br>
      <br>
      <p class="text-center">I Dewa Gede Agung Wahyu Brahmantha.</p>
    </div>
  </div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
