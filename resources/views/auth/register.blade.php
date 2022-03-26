<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="{{ asset('icon/pedulidiri.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('icon/pedulidiri.png') }}" />
    <!-- Generated: 2018-04-06 16:27:42 +0200 -->
    <title>Register - tabler.github.io - a responsive, flat and full featured admin template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="{{ asset('assets/js/require.min.js') }}"></script>
    {{-- <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script> --}}
    <!-- Dashboard Core -->
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <!-- c3.js Charts Plugin -->
    <link href="{{ asset('assets/plugins/charts-c3/plugin.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/plugins/charts-c3/plugin.js') }}"></script>
    <!-- Google Maps Plugin -->
    <link href="{{ asset('assets/plugins/maps-google/plugin.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/plugins/maps-google/plugin.js') }}"></script>
    <!-- Input Mask Plugin -->
    <script src="{{ asset('assets/plugins/input-mask/plugin.js') }}"></script>
</head>

<body class="">
    <div class="page">
        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col col-login mx-auto">
                        <div class="text-center mb-6">
                            <img src="{{ asset('assets/brand/tabler.svg') }}" class="h-6" alt="">
                        </div>
                        <form class="card" action="{{ route('store') }}" method="post">
                            @csrf
                            <div class="card-body p-6">
                                <div class="form-group">
                                    <img src="{{asset('icon/pedulidiri.png')}}" style="width:125px; margin-left:75px;">
                                </div>
                                <div class="card-title">Create new account</div>
                                <div class="form-group">
                                    <label class="form-label">NIK</label>
                                    <input type="number" name="nik" class="form-control" placeholder="Enter NIK" value="{{ old('nik') }}"> 
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Enter Nama" value="{{ old('nama') }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}" >
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="username"  class="form-control" placeholder="Enter Username" value="{{ old('username') }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                    
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                </div>
                                
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Create new account</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center text-muted">
                            Already have account? <a href="{{route('login')}}">Sign in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
