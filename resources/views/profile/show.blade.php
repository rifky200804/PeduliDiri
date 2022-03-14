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
                        <h3 class="card-title">Data Profile</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">Nama</div>
                            <div class="col-md-8">: {{$data->nama ?? ''}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">NIK</div>
                            <div class="col-md-8">: {{$data->nik ?? ''}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">No. Telp</div>
                            <div class="col-md-8">: {{$data->telp}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">email</div>
                            <div class="col-md-8">: {{$data->email}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">Alamat</div>
                            <div class="col-md-8">: {{$data->alamat}}</div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12 d-flex justify-content-end">
                                <a href="{{route('perjalanan.data')}}" class="btn btn-md btn-secondary mr-5" style="width: 100px;">Kembali</a>
                                <a href="{{route('user.edit',$data->id)}}" class="btn btn-md btn-primary" style="width: 100px;">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection


