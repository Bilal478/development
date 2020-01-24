<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Accridetation System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet"  href="{{asset('https://plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('https://plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('https://plugins/jqvmap/jqvmap.min.css')}}" >
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('https://dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('https://plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('https://plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('https://plugins/summernote/summernote-bs4.css')}}" >
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed " style="background:#323a46">
<div class="d-flex justify-content-center ">
    <div class="login-box bg-light mt-5 align-center ">

        <div class="login-logo">
        <img src="dist/img/logo2.png " alt="AdminLTE Logo" class="brand-image " >
          <a><b>Accreditation</b>System</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in with superior Email</p>

            <form  method="POST" action="{{ route('login') }}">
              @csrf
              <div class="input-group mb-3">
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">
                      Remember Me
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
              </div>
            </form>


            <!-- /.social-auth-links -->

          </div>

          </div>
        </div>
      </div>
  </div>



<script href="{{asset('https://plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script href="{{asset('https://plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script href="{{asset('https://plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script href="{{asset('https://plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script href="{{asset('https://plugins/sparklines/sparkline.js')}}" ></script>
<!-- JQVMap -->
<script href="{{asset('https://plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script href="{{asset('https://plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script href="{{asset('https://plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script href="{{asset('https://plugins/moment/moment.min.js')}}" ></script>
<script href="{{asset('https://plugins/daterangepicker/daterangepicker.js')}}" ></script>
<!-- Tempusdominus Bootstrap 4 -->
<script href="{{asset('https://plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}" ></script>
<!-- Summernote -->
<script href="{{asset('https://plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script href="{{asset('https://plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}" ></script>
<!-- AdminLTE App -->
<script href="{{asset('https://dist/js/adminlte.js')}}" ></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script href="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script href="{{asset('https://dist/js/demo.js')}}" ></script>
</body>
</html>
