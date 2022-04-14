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
                    <div class="row mb-5">
                        <div class="col-md-8">
                            <form action="" method="get">
                                <!-- <div class="col-md-4"> -->
                                    <label for="">Urutkan Berdasarkan Tanggal : </label>
                                    <input type="date" name="urutan" id="urutan">
                                <!-- </div> -->
                                <!-- <div class="col-md-2"> -->
                                    <button type="submit" class="">Urut</button>
                                <!-- </div> -->
                            </form>
                        </div>
                        <div class="col-md-4 d-flex justify-content-end">
                           
                            <a href="{{route('perjalanan.cetak_pdf')}}" target="blank" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                    <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                    <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                                </svg> &nbsp;
                                Print Perjalanan
                            </a>
                           
                        </div>
                    </div>
                    
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
                                    <th>NIK</th>
                                    @endif
                                    <th>
                                        @if(Auth::user()->role != 'admin')
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleAdd">
                                            Tambah Data
                                        </button>
                                        @include('perjalanan.modal.create')
                                        @elseif(Auth::user()->role == 'admin')
                                        Aksi
                                        @endif
                                    </th>
                                </tr>
                            </thead>

                            @foreach ($data as $key => $value)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $value->tanggal }}</td>
                                    <td>{{ $value->jam }}</td>
                                    <td>{{ $value->lokasi_awal }} Menuju {{ $value->lokasi_tujuan }}</td>
                                    <td>{{ $value->suhu_tubuh }}</td>
                                    @if (Auth::user()->role == 'admin')
                                    <td>{{ $value->user->nama }}</td>
                                    <td>{{ $value->user->nik }}</td>
                                    @endif
                                    <td>
                                        
                                        <a href="{{ route('perjalanan.delete', $value->id_perjalanan) }}" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus data ini?')">Hapus</a>
                                    
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