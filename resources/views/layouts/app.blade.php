<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>J&R Shop</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/image.png') }}">
  <!-- Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/head_foot.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/ad_sidebar.css') }}">
  <!-- Bootstrap’s compiled CSS and JS -->
  <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.0-dist/css/bootstrap.min.css') }}">
  <script src="{{ asset('assets/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <!-- Jquery -->
  <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
  <!-- Font Awesome Solid + Brands -->
  <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.4.0-web/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.4.0-web/css/brands.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.4.0-web/css/solid.css') }}">
  <!-- Data Table -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
</head>
<body>
<!--The main layout template for your application-->
<!--sidebar-->
<div class="wrapper">
  @include('layouts.sidebar')
</div>

  <!-- main page -->
  <div class="main">
    @include('layouts.navbar')

    <div class="container mx-4 mt-4">
      <div class="card border-light mb-3" style="width: 95%;">
        <div class="card-body">
          @yield('contents')  <!-- This is where the content from other pages will be injected -->
        </div>
    </div>
    </div>
  </div>
</body>
</html>