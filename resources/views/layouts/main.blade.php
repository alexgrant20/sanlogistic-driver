<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sanlogistic-Driver | {{ $title }}</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">

  {{-- Google Font --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
  {{-- theme stylesheet --}}
  <link rel="stylesheet" href="{{ asset('/css/style.default.css') }}" id="theme-stylesheet">
  {{-- Custom Stylesheet --}}
  <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
  {{-- Favicon --}}
  <link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }}">

  {{-- Jquery --}}
  <script type='text/javascript' src="{{ asset('/vendor/jquery/jquery-3.6.0.min.js') }}"></script>

  {{-- Zoom CSS --}}
  <link href="{{ asset('/vendor/zoom/zoom.css') }}" rel="stylesheet">

  @yield('headCSS')

  @yield('headJS')

</head>

<body>
  @include('partials.header')
  <div class="d-flex align-items-stretch">

    @yield('container')

  </div>
  @include('partials.footer')

  <!-- JavaScript files-->
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Main File-->
  <script src="{{ asset('/js/function.js') }}"></script>
  {{-- Zoom JS --}}
  <script src="{{ asset('/vendor/zoom/zoom.js') }}"></script>
  <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  @yield('footJS')

</body>

</html>
