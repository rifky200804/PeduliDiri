@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-9">
                <h1>Selamat Datang Di Peduli Diri</h1>
                <h3>Anda Dapat Menggunakan PEDULI DIRI Untuk Mencatat Data Perjalanan Anda</h3>

                <label for="" class="mt-9">Belum Punya Akun?</label><br>
                <a href="{{route('register')}}" class="btn btn-info btn-lg rounded-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" style="margin-right:5px;" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                        <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                        <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
                    </svg>
                    Daftar
                </a>
            </div>
            <div class="col-md-6">
                <img src="{{asset('foto/default/index.png')}}" alt="">
            </div>
        </div>
    </div>
@endsection