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
                        <a href="{{route('user.cetak_pdf')}}" target="blank" class="btn btn-primary">Cetak</a>
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
                                            <button type="button" class="btn btn-success" data-toggle="modal"
                                                data-target="#exampleModal">
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
                                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#exampleDelete">
                                                        Delete
                                                    </button>
                                                @endif
                                                @include('profile.modal.delete')
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
