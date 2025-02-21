<?php
if(!session_id()){
    session_start();
}
?>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-14">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          
       <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="#">
              <img src="assets/img/logos/favicon.png" alt=""> ShopEase
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
          
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
              <?php
        if(isset($_SESSION['u_id'])){
        ?>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="dashboard.php">
                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                    Dahboard
                  </a>
                </li>
                
        
                <li class="nav-item">
                  <a class="nav-link me-2" href="products.php">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                    View Delivered Parcel
                  </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link me-2" href="order.php">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                    Orders
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="categories.php">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                    Categories
                  </a>
                </li>
                </ul>
                <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="logout.php" class="btn btn-sm mb-0 me-1 btn-primary">Logout</a>
                </li>
              
          <?php
              } else{
        ?>
           <li class="nav-item">
                  <a class="nav-link me-2" href="register.php">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    Sign Up
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="login.php">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    Sign In
                  </a>
                </li>
              </ul>
              
            <?php
        }
        ?>
          </div>

          </div>
        </nav>
        <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/argon-dashboard.min.js?v=2.0.4"></script>

