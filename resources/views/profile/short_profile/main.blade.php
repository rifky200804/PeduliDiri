<div class="card">
    <div class="card-header">
        <h3 class="card-title">My Profile</h3>
    </div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-auto mb-2">
                    <span class="avatar avatar-xl"
                    @if(Auth::user()->foto > 0) style="background-image: url({{ asset('foto/'.  Auth::user()->foto)  }})"@else 
                    style="background-image: url({{ asset('foto/default.png')  }})"@endif></span>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="form-label">{{ Auth::user()->nama }}</label>
                        <label class="form-label">{{ Auth::user()->nik }}</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-4">username</label>
                        <label class="col-md-7">: {{ Auth::user()->username }}</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-4">No. Telp</label>
                        <label class="col-md-7">: {{ Auth::user()->telp }}</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-4">Email</label> 
                        <label class="col-md-7">: {{ Auth::user()->email }}</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-4">Kota</label> 
                        <label class="col-md-7">: {{ Auth::user()->kota->kota ?? ''}}</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-footer">
                        <a href="{{ route('user.edit', Auth::user()->id) }}"
                            class="btn btn-primary btn-block">Edit</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>