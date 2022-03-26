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
        <div class="row">
            <div class="col-md-12">
                {{-- <img src="{{asset('icon/pedulidiri.png')}}" style="width:20px; height:20px"> --}}
                <h5>Laporan Data User PEDULI DIRI</h5>
            </div>
        </div>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Role</th>
				<th>NIK</th>
				<th>Nama</th>
				<th>No.Telp</th>
				<th>Email</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($user as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $p->role }}</td>
				<td>{{ $p->nik }}</td>
				<td>{{$p->nama ?? '-'}}</td>
				<td>{{$p->telp ?? '-'}}</td>
				<td>{{$p->email ?? '-'}}</td>
				<td>{{$p->alamat ?? '-'}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>