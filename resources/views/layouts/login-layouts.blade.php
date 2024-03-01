<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <link href="{{ url("/storage/telechargement.png")}}" rel="icon">
  <link href="{{ url("/storage/telechargement.png")}}" rel="apple-touch-icon">
  <link href="{!! asset('template/vendor/bootstrap-icons/bootstrap-icons.css') !!}" rel="stylesheet">
  <link href="{!! asset('template/vendor/boxicons/css/boxicons.css') !!}" rel="stylesheet">
  <link href="{!! asset('template/vendor/fontawesome-free/css/all.min.css')!!}" rel="stylesheet" type="text/css">
  <link href="{!! asset("template/css/sb-admin-2.min.css") !!}" rel="stylesheet">
  <link rel="stylesheet" href="{!! asset("template/vendor/toaster/bootstrap-toaster.css") !!}" />
</head>
  <body class="bg-gradient-primary">
    <div class="container-scroller">
        @yield('contenu')
        @include('layouts.partials._footer')
  </body>
  <script src="{!! asset('template/vendor/jquery/jquery.min.js') !!}"></script>
  <script src="{!! asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
  <script src="{!! asset('template/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>
  <script src="{!! asset('template/js/sb-admin-2.min.js') !!}"></script>
  
  <script src="{!! asset("template/js/swetalert-modal.js") !!}"></script>
  <script src="{!! asset("template/js/sweet_alert.js") !!}"></script>
  @include('sweetalert::alert')
</html>