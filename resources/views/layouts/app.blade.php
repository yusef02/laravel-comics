<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="ie=edge" http-equiv="X-UA-Compatible">
  <title>Documento</title>

  @vite('resources/js/app.js')

  @yield('css')
</head>

<body>
  @include('partials._header')

  @yield('main-content')

  @include('partials._footer')

  @yield('js')
</body>

</html>