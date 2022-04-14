<!DOCTYPE html>
<html>
<head>
	<title>PEDULIDIRI</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" href="{{ asset('icon/pedulidiri.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('icon/pedulidiri.png') }}" />
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>       
        <h5>Laporan Data Perjalanan PEDULI DIRI</h5>
	</center>
	<hr>
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Jam</th>
				<th>Lokasi</th>
				<th>Suhu Tubuh</th>
                @if(Auth::user()->role == 'admin')
				<th>User</th>
                <th>NIK</th>
                @endif
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($perjalanan as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $p->tanggal }}</td>
				<td>{{$p->jam}}</td>
				<td>{{$p->lokasi_awal}} Menuju {{$p->lokasi_tujuan}}</td>
				<td>{{$p->suhu_tubuh}}</td>
                @if(Auth::user()->role == 'admin')
				<td>{{$p->user->nama}}</td>
                <td>{{$p->user->nik}}</td>
                @endif
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>