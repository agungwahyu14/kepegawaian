<!DOCTYPE html>
<html>
<head>
	<title>Laporan Slip Gaji</title>
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
		<h6>Slip Gaji Pegawai</h6>
	</center>
	<hr>
	
	<div class="d-flex gap-0">
		@foreach($user as $data)
		<p>Nama Pegawai : <span>{{$data->name}}</span></p>
		<p>Pegawai Id : <span>{{$data->id_pegawai}}</span></p>
		@endforeach
	</div>
 
	<table class="table table-striped table-bordered">
		<thead>
			<tr  class="text-center">
				<th scope="col">No</th>
				<th scope="col">Keterangan</th>
				<th scope="col">Jumlah</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-center">
				<th scope="row">1</th>
				<td>Gaji Pokok</td>
				<td>@currency($gaji->gaji_pokok)</td>
			</tr>
			<tr class="text-center">
				<th scope="row">2</th>
				<td>Tunjangan Tetap</td>
				<td>@currency($gaji->tunjangan_tetap)</td>
			</tr>
			<tr class="text-center">
				<th scope="row">3</th>
				<td>Tunjangan Transportasi</td>
				<td>@currency($gaji->tunjangan_transportasi)</td>
			</tr>
      <tr class="text-center">
        <td colspan="2" >Total Gaji Pegawai</td>
        <td  class="text-center">@currency($gaji->total)</td>
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
