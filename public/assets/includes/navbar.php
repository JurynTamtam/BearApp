<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title; ?> || Luxe Mystique</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="../../assets/images/icon.png">
  <!-- Css -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../../assets/css/head_foot.css">
  <!-- Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <!-- Bootstrap’s compiled CSS and JS -->
  <link rel="stylesheet" href="../../assets/bootstrap-5.3.0-dist/css/bootstrap.min.css">
  <script src="../../assets/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
  <!-- Jquery -->
  <script src="../../assets/jquery/jquery.min.js"></script>
  <!-- Font Awesome Solid + Brands -->
  <link rel="stylesheet" href="../assets/fontawesome-free-6.4.0-web/css/fontawesome.css">
  <link rel="stylesheet" href="../assets/fontawesome-free-6.4.0-web/css/brands.css">
  <link rel="stylesheet" href="./assets/fontawesome-free-6.4.0-web/css/solid.css">
</head>

<body>
  <!-- Navigation-->
  <nav class="navbar sticky-top navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="assets/images/icon.png" alt="Logo" width="40" height="40" class="d-inline-block align-end ms-5">
        <span class="text-light">Luxe Mystique</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="nav nav-pills ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'home') {
                                  echo 'active';
                                } ?> px-3" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'shop') {
                                  echo 'active';
                                } ?> px-3" href="login.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'about') {
                                  echo 'active';
                                } ?> px-3" href="about.php">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>

</html>