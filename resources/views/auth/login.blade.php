<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>{{ site_name() }}</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ load_asset('bootstrap/css/bootstrap.min.css') }}">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ load_asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="{{ load_asset('plugins/iCheck/square/blue.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>    

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/') }}"><b>{{ site_name() }}</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

         <form role="form" method="POST" action="{{ route('auth.login') }}" _lpchecked="1">
            {!! csrf_field() !!}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
            <input type="text" name="email" id="email" class="form-control" placeholder="Email"> 
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                            
                  <div class="row">
                    <div class="col-xs-8">
                      <div class="checkbox icheck">
                        <label>
                          <input type="checkbox"> Remember Me
                        </label>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                      <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                  </div>
                  
                    <div class="social-auth-links text-center">
                      <p>- OR -</p>
                        <a href="{{ url('/auth/facebook') }}" class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i>Sign in with Facebook</a>
                        <a href="{{ url('/auth/twitter') }}" class="btn btn-block btn-social btn-twitter"><i class="fa fa-twitter"></i>Sign in with Twitter</a>
                        <a href="{{ url('/auth/google') }}" class="btn btn-block btn-social btn-google"><i class="fa fa-google-plus"></i>Sign in with Google</a>
                        <a href="{{ url('/auth/github') }}" class="btn btn-block btn-social btn-github"><i class="fa fa-github"></i>Sign in with GitHub</a>                        
                    </div>
                    <!-- /.social-auth-links -->

                    </form>                
                
                    <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
                    <a href="{{ url('/signup') }}">Sign up for a new account</a><br>
                    <a href="{{ url('/') }}">Return home</a><br>
                  
                   </div>
                  <!-- /.login-box-body -->
                </div>
                <!-- /.login-box -->
                
                <!-- jQuery 2.2.3 -->
                <script src="{{ load_asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
                <!-- Bootstrap 3.3.6 -->
                <script src="{{ load_asset('bootstrap/js/bootstrap.min.js') }}"></script>
                <!-- iCheck -->
                <script src="{{ load_asset('plugins/iCheck/icheck.min.js') }}"></script>
                <script>
                  $(function () {
                    $('input').iCheck({
                      checkboxClass: 'icheckbox_square-blue',
                      radioClass: 'iradio_square-blue',
                      increaseArea: '20%' // optional
                    });
                  });
                </script>
                </body>
                </html> 

