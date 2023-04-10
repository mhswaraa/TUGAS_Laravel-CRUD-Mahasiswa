<!DOCTYPE html>
<html>
<head>
	<title>Export Laporan Excel Pada Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
	<div class="container">
		<center>
			<h4>Export Laporan Excel Pada Laravel</h4>
		</center>
		
		<a href="/mahasiswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
		
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>hp</th>
				</tr>
			</thead>
			<tbody>
			
				@foreach ($data as $mahasiswa)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$s->nim}}</td>
					<td>{{$s->nama}}</td>
					<td>{{$s->alamat}}</td>
					<td>{{$s->hp}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
 
</body>
</html>