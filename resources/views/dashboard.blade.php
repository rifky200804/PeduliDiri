@extends('layouts.app')

@section('title','PEDULI DIRI')
@section('content')
    <div class="container">
        <h1>Selamat Datang {{Auth::user()->nama}} di Peduli Diri</h1>
    </div>
@endsection