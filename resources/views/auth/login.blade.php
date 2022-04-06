@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-9">
                <h1>LOGIN</h1>
                <form action="{{ route('postlogin') }}" method="post">
                    @csrf
                    @if (session('message'))
                        <span style="color:red;">
                            <strong>{{session('message')}}</strong>
                        </span>
                    @endif
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputusername1"
                        aria-describedby="usernameHelp" placeholder="Enter username" name="username">
                    </div>
                    <div class="form-group">
                        <label class="form-label">
                            Password
                            {{-- <a href="./forgot-password.html" class="float-right small">I forgot password</a> --}}
                        </label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Password" name="password">
                    </div>
                    
                    <div class="form-footer mb-3">
                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                    <div class="text-center text-muted">
                        Don't have account yet? <a href="{{ route('register') }}">Sign up</a>
                    </div>
                </div>
            </form>
            <div class="col-md-6">
                <img src="{{asset('foto/default/login.png')}}" alt="">
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection