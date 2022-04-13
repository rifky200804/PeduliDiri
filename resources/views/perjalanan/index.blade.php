@extends('layouts.app')

@section('title', 'PEDULI DIRI')
@section('content')
<div class="container">

    @error('tanggal')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror

    @error('jam')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror

    @error('lokasi')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror

    @error('suhu_tubuh')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

    </div>
    @enderror


    @include('sweetalert::alert')
    <div class="row">
        <div class="col-md-4">
            @include('profile.short_profile.main')
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Perjalanan</h3>
                </div>
                <div class="card-body">
                    <!-- <div class="row"> -->
                        <!-- <div class="col-md-12"> -->
                            <form action="" method="get">
                                <!-- <div class="col-md-4"> -->
                                    <label for="">Urutkan Berdasarkan Tanggal : </label>
                                    <input type="date" name="urutan" id="urutan">
                                <!-- </div> -->
                                <!-- <div class="col-md-2"> -->
                                    <button type="submit" class="">Urut</button>
                                <!-- </div> -->
                            </form>
                        <!-- </div> -->
                    <!-- </div> -->
                    <div class="table-responsive">
                        <table class="table table-hover card-table table-vcenter text-nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Lokasi</th>
                                    <th>Suhu Tubuh</th>
                                    @if (Auth::user()->role == 'admin')
                                    <th>User</th>
                                    @endif
                                    <th>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleAdd">
                                            Tambah Data
                                        </button>
                                        @include('perjalanan.modal.Create')
                                    </th>
                                </tr>
                            </thead>

                            @foreach ($data as $key => $value)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $value->tanggal }}</td>
                                    <td>{{ $value->jam }}</td>
                                    <td>{{ $value->lokasi }}</td>
                                    <td>{{ $value->suhu_tubuh }}</td>
                                    @if (Auth::user()->role == 'admin')
                                    <td>{{ $value->user->nama }}</td>
                                    @endif
                                    <td>
                                        {{-- <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#exampleDelete">
                                                    Delete
                                                </button> --}}
                                        <a href="{{ route('perjalanan.delete', $value->id_perjalanan) }}" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus data ini?')">Hapus</a>
                                        {{-- @include('perjalanan.modal.delete') --}}
                                        
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="col-md-12">
                        @if(!isset($urut))
                        Halaman
                        {{ $data->currentPage() }}
                        dari
                        {{ $data->lastPage() }}
                        {{ $data->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection