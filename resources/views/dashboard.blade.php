@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-9">
                <h1>Selamat Datang {{ Auth::user()->nama }} Di Peduli Diri</h1>
                <h3 class="mb-7">Anda Dapat Menggunakan PEDULI DIRI Untuk Mencatat Data Perjalanan Anda</h3>

            </div>
            <div class="col-md-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('foto/default/index.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('foto/default/index2.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('foto/default/index3.png') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                {{-- <img src="" alt=""> --}}
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
