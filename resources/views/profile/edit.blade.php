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
                        <h3 class="card-title">Edit Profile</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{route('user.update',$data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label class="form-label">NIK</label>
                                        <input type="number" class="form-control" name="nik" value="{{ $data->nik }}"
                                            placeholder="Text..">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" value="{{ $data->nama }}"
                                            placeholder="Text..">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Telepon</label>
                                        <input type="number" class="form-control" name="telp" value="{{ $data->telp }}"
                                            placeholder="Text..">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $data->email }}"
                                            placeholder="Text..">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Kota</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Kota</label>
                                            </div>
                                            <select class="custom-select" name="id_kota" id="inputGroupSelect01">
                                                <option disabled @if($data->id_kota == NULL) selected @endif>Pilih...</option>
                                                @foreach ($kota as $v_kota)
                                                    <option value="{{ $v_kota->id_kota }}" @if($v_kota->id_kota == $data->id_kota) selected @endif>{{ $v_kota->kota }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="form-label">Foto</label>
                                        <div class="input-group mb-3">
                                        <input type="file" name="foto" class="form-control">
                                        </div>                                        
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <div class="d-flex">
                                    <button type="submit" class="btn btn-primary ml-auto">Save data</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection







{{-- <h1>Tambah Data </h1>
<form action="{{route('user.store')}}" method="post">
    @csrf
    <label for="nik">NIK</label>
    : <input type="text" name="nik" id="nik" value="">
    <br>
    <label for="nama">Nama</label>
    : <input type="text" name="nama" id="nama" value="">
    <br>
    <label for="telp">Telpon</label>
    : <input type="text" name="telp" id="telp" value="" ">
    <br>
    <label for="email">Email</label>
    : <input type="text" name="email" id="email" value=" ">
    <br>
    <label for="username">Username</label>
    : <input type="text" name="username" id="username" value="  ">
    <br>
    <label for="password">password</label>
    : <input type="password" name="password" id="password">
    <br>
    <label for="confirm_password">Confirm Password</label>
    <input type="password" name="confirm_password" id="confirm_password">
    <br>
    <button type="submit">Tambah</button> --}}
