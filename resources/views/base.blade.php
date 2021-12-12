<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel 8 & MySQL CRUD Tutorial</title>

  <!-- Scripts -->

  @routes
  <script src="{{ mix('js/app.js') }}" defer></script>

  <!-- CSS only -->
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />

</head>
<body>
  <div class="container">
  @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
