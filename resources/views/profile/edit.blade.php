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

                        <form action="{{ route('user.update', $data->id) }}" method="post" enctype="multipart/form-data">
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
                                        <label class="form-label">No. Telp</label>
                                        <input type="number" class="form-control" name="telp" value="{{ $data->telp }}"
                                            placeholder="Text..">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $data->email }}"
                                            placeholder="Text..">
                                    </div>

                                    {{-- alamat --}}
                                    {{-- provinsi --}}
                                    <div class="form-group">
                                        <label class="form-label">Provinsi</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="selectProvinsi">Provinsi</label>
                                            </div>
                                            <select class="custom-select" name="selectProvinsi" id="selectProvinsi">
                                                {{-- <option>Provinsi</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                    {{-- kabupaten/kota --}}
                                    <div class="form-group">
                                        <label class="form-label">Kabupaten</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="selectKabupaten">Kabupaten</label>
                                            </div>
                                            <select class="custom-select" name="selectKabupaten" id="selectKabupaten">
                                                {{-- <option>Kabupaten</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                    {{-- kecamatan --}}
                                    <div class="form-group">
                                        <label class="form-label">Kecamatan</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="selectKecamatan">Kecamatan</label>
                                            </div>
                                            <select class="custom-select" name="selectKecamatan" id="selectKecamatan">
                                                {{-- <option value="Kecamatan"></option> --}}
                                            </select>
                                        </div>
                                    </div>
                                    {{-- kelurahan --}}
                                    <div class="form-group">
                                        <label class="form-label">Kelurahan</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="selectKelurahan">Kelurahan</label>
                                            </div>
                                            <select class="custom-select" name="selectKelurahan" id="selectKelurahan">
                                                {{-- <option> Kelurahan </option> --}}
                                            </select>
                                        </div>
                                    </div>

                                    {{-- final alamat --}}
                                    <div class="form-group">
                                        <label class="form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="alamat">{{$data->alamat ?? ''}}</textarea>
                                    </div>
                                    {{-- end alamat --}}

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
    

    <script>
        let selectProvinsi = document.getElementById('selectProvinsi');
        let selectKabupaten = document.getElementById('selectKabupaten');
        let selectKecamatan = document.getElementById('selectKecamatan');
        let selectKelurahan = document.getElementById('selectKelurahan');
        let alamat = document.getElementById('alamat');

        document.addEventListener('DOMContentLoaded', function(){
            fetchProvinsi();
            selectKabupaten.style.display = "none";
            selectKecamatan.style.display = "none";
            selectKelurahan.style.display = "none";

            getValueToAlamat();
        });

        const config = {
            method : 'GET'
        }

        // fetch provinsi get data
        async function fetchProvinsi(){
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`;
            await fetch(URL, config)
            .then(response => response.json())
            // .then(provinsi => console.log(provinsi))
            .then(provinsi => {
                if(provinsi != null || undefined){
                    provinsi.map(data=>{
                        let opt = document.createElement('option');
                        opt.value = data.id;
                        opt.innerHTML = data.name;
                        selectProvinsi.appendChild(opt);
                        // console.log(selectProvinsi)
                    })
                }else{
                    let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectProvinsi.appendChild(opt);
                }
            }).catch(error => alert(`Data provinsi tidak ada`));
        }

        // fetch kabupaten/kota get data
        async function fetchKabupaten(id){
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
            .then(response => response.json())
            .then(kabupaten =>{
                if (kabupaten !== null || undefined) {
                        kabupaten.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKabupaten.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKabupaten.appendChild(opt);
                    }
            })
        }

        // fetch kecamatan get data
        async function fetchKecamatan(id){
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/districts/${id === undefined || null ? ""  : id}.json`;
            await fetch(URL, config)
            .then(response => response.json())
            .then(kecamatan =>{
                if (kecamatan !== null || undefined) {
                        kecamatan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKecamatan.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKecamatan.appendChild(opt);
                    }
            })
        }

    
        async function fetchKelurahan(id){
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/villages/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
            .then(response => response.json())
            .then(kelurahan => {
                if(kelurahan !== null || undefined){
                    kelurahan.map(data => {

                        let opt = document.createElement('option');
                        opt.value = data.id;
                        opt.innerHTML = data.name;
                        selectKelurahan.appendChild(opt);
                    })
                }else{
                    let opt = document.createElement('option');
                    opt.value = "";
                    opt.innerHTML = "Data Tidak Tersedia";
                    selectKelurahan.appendChild(opt);
                }
            })
        }




        selectProvinsi.addEventListener('change', () => {
            fetchKabupaten(selectProvinsi.value);
            selectKabupaten.style.display = "block";
            selectKabupaten.innerHTML = '';
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });
        
        selectKabupaten.addEventListener('change', () => {
            fetchKecamatan(selectKabupaten.value);
            selectKecamatan.style.display = "block";
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });
        
        selectKecamatan.addEventListener('change', () => {
            fetchKelurahan(selectKecamatan.value);
            selectKelurahan.style.display = "block";
            selectKelurahan.innerHTML = '';
        });

        function getValueToAlamat() {
            alamat.addEventListener('change', () => {
                let alamatText = alamat.value;
                document.getElementById('alamat').value = `${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKabupaten.options[selectKabupaten.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `;
                // console.log(`${alamatText}, ${selectKelurahan.options[  selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKabupaten.options[selectKabupaten.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `);
                
            });
        }
    </script>
@endsection