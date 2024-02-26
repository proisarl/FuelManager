<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>LOGIN</title>
  <link href="{!! asset('template/vendor/fontawesome-free/css/all.min.css')!!}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="{!! asset("template/css/sb-admin-2.min.css") !!}" rel="stylesheet">
</head>
  <body class="bg-gradient-primary">
    <div class="container-scroller">
        @include('layouts.partials._sidebar')
        @include('layouts.partials._navbar')
        @yield('contenu')
        @include('layouts.partials._footer')
  </body>
  <script src="{!! asset('template/vendor/jquery/jquery.min.js') !!}"></script>
  <script src="{!! asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
  <script src="{!! asset('template/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>
  <script src="{!! asset('template/js/sb-admin-2.min.js') !!}"></script>
  <script src="{!! asset('template/vendor/chart.js/Chart.min.js') !!}"></script>
  <script src="{!! asset('template/js/demo/chart-area-demo.js') !!}"></script>
  <script src="{!! asset('template/js/demo/chart-pie-demo.js') !!}"></script>
</html>