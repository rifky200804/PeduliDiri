@extends('layouts.app')
@section('title', 'PEDULI DIRI')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            @include('profile.short_profile.main')
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data User</h3>
                </div>
                <div class="card-body">
                    <a href="{{route('user.cetak_pdf')}}" target="blank" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                        </svg> &nbsp;
                        Cetak Data User
                    </a>
                    <div class="table-responsive">
                        <table class="table table-hover card-table table-vcenter text-nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>NIK</th>
                                    <th>role</th>
                                    <th>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                            Tambah Data
                                        </button>
                                        @include('profile.modal.Create')
                                    </th>
                                </tr>
                            </thead>

                            @foreach ($data as $value)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->username }}</td>
                                    <td>{{ $value->nik }}</td>
                                    <td>{{ $value->role }}</td>
                                    <td>
                                        <a href="{{route('user.detail',$value->id)}}" class="btn btn-warning">Detail</a>
                                        @if ($value->role != 'admin')
                                        <a href="{{route('user.delete',$value->id)}}" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus data ini?')">Hapus</a>
                                        @endif
                                        @include('profile.modal.delete')
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        Halaman
                        {{$data->currentPage()}}
                        Dari
                        {{$data->lastPage()}}

                        {{$data->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection