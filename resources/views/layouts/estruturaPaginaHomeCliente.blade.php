<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Finding Car</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/landing-page.min.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/template/index.css') }}">

</head>

<body>

     <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img id="logo" src="img/logo.png"></a><br>
          <a class="btn btn-danger" href=" {{ route('register') }} ">Cadastre-se</a>
          <a class="btn btn-danger" href=" {{ route('register') }} ">Anunciar Veículo</a>
        </div>
    </nav>
  




    @yield('conteudo')



    <!-- Bootstrap core JavaScript -->
   <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
   <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>