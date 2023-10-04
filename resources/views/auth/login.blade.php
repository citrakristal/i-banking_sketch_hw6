<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Company Name| Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
    <div class="login-box" >
        <div class="card" style="border-radius: 14px">
            <div class="card-header text-center" >
                <!-- /.login-logo -->
                <a href="{{route('login')}}"> <img  src="{{asset('lte/dist/img/logo.png')}}" alt="" ></a>
            </div>
            <div class="card-body bg-light" style="border-radius: 14px">
                    {{-- form login --}}
                <form action="{{route('login-proses')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Input Your email" style="border-radius: 14px">
                    </div>
                    @error('email')
                    <small class="text-danger">{{$message}}</small>
                    @enderror

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Input Your Password" style="border-radius: 14px">
                    </div>
                    @error('password')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    
                    <div class="row">
                    {{-- <div class="col-8">
                        <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                        </div>
                    </div> --}}
                    <!-- /.col -->
                    <div class="col-12 ">
                        <button type="submit" class="btn btn-primary btn-block"  style="border-radius: 14px">Log in</button>
                    </div>
                    <!-- /.col -->
                </form>
            </div>
            <p class="mb-1 mt-3 text-center">Forgot Password?
                <a href="forgot-password.html">Click Here</a>
            </p>
        </div>
    </div>
<!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{asset('lte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('lte/dist/js/adminlte.min.js') }}"></script>

    <!--dari https://sweetalert2.github.io/ -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if($message = Session::get('failed'))
    <script>
        Swal.fire('{{$message}}');
    </script>
@endif

@if($message = Session::get('success'))
    <script>
        Swal.fire('{{$message}}');
    </script>
@endif
</body>
</html>
