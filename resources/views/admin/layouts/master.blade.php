<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>{{ site_name() }} - Admin Dashboard</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="{{ load_asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="{{ load_asset('plugins/datatables/dataTables.bootstrap.css') }}">   
  <link rel="stylesheet" href="{{ load_asset('dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ load_asset('summernote/summernote.css') }}">
  <link rel="stylesheet" href="{{ load_asset('dist/css/skins/skin-purple.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-purple fixed sidebar-mini">

    @include('admin.layouts.partials.header')
      
        @include('admin.layouts.partials.navbar')

            @yield('content')

        @include('admin.layouts.partials.footer')


<script src="{{ load_asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script src="{{ load_asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ load_asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ load_asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ load_asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ load_asset('dist/js/app.min.js') }}"></script>
<script src="{{ load_asset('summernote/summernote.min.js') }}"></script>
<script src="{{ load_asset('js/script.js') }}"></script>
    
@stack('scripts')

</body>
</html>
