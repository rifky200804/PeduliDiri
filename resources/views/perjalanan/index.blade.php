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
                        <h3 class="card-title">Data Perjalanan</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover card-table table-vcenter text-nowrap">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Jam</th>
                                      <th>Lokasi</th>
                                      <th>Suhu Tubuh</th>
                                     
                                      <th>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleAdd">
                                            Tambah Data
                                        </button>
                                        @include('perjalanan.modal.Create')
                                      </th>
                                  </tr>
                              </thead>
                            
                              @foreach($data as $key => $value )
                              <tbody>
                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$value->jam}}</td>
                                    <td>{{$value->lokasi}}</td>
                                    <td>{{$value->suhu_tubuh}}</td>
                                    
                                    <td>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleDelete">
                                            Delete
                                        </button>
                                        @include('perjalanan.modal.delete')
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
@endsection
