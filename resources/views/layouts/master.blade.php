<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width">
    <title>{{ site_name() }} - @yield('title')</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ load_asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.12.0/bootstrap-social.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ load_asset('dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ load_asset('dist/css/skins/skin-purple.min.css') }}">
    <link rel="stylesheet" href="{{ load_asset('summernote/summernote.css') }}">
    
</head>    

  <body class="hold-transition skin-purple layout-top-nav">

    <div class="wrapper">
    
        @include('layouts.partials.header')

        @yield('content')
    
    </div>

        @include('layouts.partials.footer')

    <script src="{{ load_asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ load_asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ load_asset('dist/js/app.min.js') }}"></script>
    <script src="{{ load_asset('summernote/summernote.min.js') }}"></script>
    <script src="{{ load_asset('js/script.js') }}"></script>       
  </body>
</html>
