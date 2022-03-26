@extends('layouts.app')
@section('title', 'PEDULI DIRI')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @include('profile.short_profile.detail')
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data User</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">NIK</label>
                            </div>
                            <div class="col-md-9">
                                <label>: {{$data->nik}}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Role</label>
                            </div>
                            <div class="col-md-9">
                                <label>: {{$data->role}}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Nama</label>
                            </div>
                            <div class="col-md-9">
                                <label>: {{$data->nama}}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Email</label>
                            </div>
                            <div class="col-md-9">
                                <label>: {{$data->email}}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label for="">No. Telp</label>
                            </div>
                            <div class="col-md-9">
                                <label>: {{$data->telp}}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Alamat</label>
                            </div>
                            <div class="col-md-9">
                                <label>: {{$data->alamat}}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
