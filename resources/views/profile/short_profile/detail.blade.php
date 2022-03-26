<div class="card">
    <div class="card-header">
        <h3 class="card-title">Profile {{$data->nama}}</h3>
    </div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-auto mb-2">
                    <span class="avatar avatar-xl"
                    @if($data->foto > 0) style="background-image: url({{ asset('foto/'.  $data->foto)  }})"@else 
                    style="background-image: url({{ asset('foto/default.png')  }})"@endif></span>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="form-label">{{ $data->nama }}</label>
                        <label class="form-label">{{ $data->nik }}</label>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-4">username</label>
                        <label class="col-md-7">: {{ $data->username }}</label>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-4">Email</label>
                        <label class="col-md-7">: {{ $data->email }}</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-4">No. Telp</label>
                        <label class="col-md-7">: {{ $data->telp }}</label>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-4">Alamat</label> 
                        <label class="col-md-7">: {{ Auth::user()->alamat ?? ''}}</label>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-md-12">
                    {{-- <div class="form-footer ">
                        <a href="{{ route('user.show', Auth::user()->id) }}"
                            class="btn btn-primary btn-block">Profile</a>
                    </div> --}}
                </div>
            </div>
        </form>
    </div>
</div>