@extends('layouts.app')

@section('title', 'PEDULI DIRI')
@section('content')
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" style="height: 400px;" src="{{asset('foto/dashboard/Pic_3.jpg')}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Selamat Datang {{Auth::user()->nama}} Di Aplikasi Peduli Diri</h1>
                        <h5></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 400px;" src="{{asset('foto/dashboard/Pic_2.jpg')}}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Anda Dapat Mencatat Data Perjalanan Anda Di Peduli Diri</h1>
                        <h5></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 400px;" src="{{asset('foto/dashboard/Pic_1.jpg')}}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Silahkan Gunakan Peduli Diri untuk Mencatat Suhu Tubuh Pada Perjalanan Anda</h1>
                        <h5></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 400px;" src="{{asset('foto/dashboard/Pic_4.jpg')}}" alt="Four slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1></h1>
                        <h5></h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        {{-- <h1>Selamat Datang {{ Auth::user()->nama }} di Peduli Diri</h1> --}}
    </div>
@endsection
