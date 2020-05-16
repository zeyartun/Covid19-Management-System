<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">

<style>
    body{
        background-image: url({{asset('bg.jpg')}});
        background-color: gray;         
        background-position: center; 
        background-repeat: no-repeat;
        width:100%; 
        background-size: cover;
    }
</style>

</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<footer class="footer">
    @yield('footer')
    <script src={{asset('plugins/jquery/jquery.min.js')}}></script>
    <!-- Bootstrap 4 -->
    <script src={{asset('plugins/bootstrap/js/bootstrap.min.js')}}></script>
    <!-- AdminLTE App -->
    <script src={{asset('dist/adminlte.min.js')}}></script>

</footer>

</html>
