<!DOCTYPE html>
<html lang="en">
<?php include 'xcon.php'; 
error_reporting(0); ?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistem Informasi TI.20.B.1 - Universitas Pelita Bangsa</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logo-mini.png" />

  <!-- DATA TABLES -->
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
        var currYear = (new Date()).getFullYear();

        $(document).ready(function() {
          $(".datepicker").datepicker({
            defaultDate: new Date(currYear-5,1,31),
            // setDefaultDate: new Date(2000,01,31),
            maxDate: new Date(currYear-5,12,31),
            yearRange: [1928, currYear-5],
            format: "yyyy/mm/dd"
          });
        });
  </script>


</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="images/logo.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                S  </head>
  <body>ettings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include 'menu.php'; ?>


        <div class="content-wrapper">


          <?php
          $hal = $_GET['halaman'];

          if($hal == 'Dashboard'){
            require 'isi/utama.php';
          }else if($hal == 'Mahasiswa'){
            require 'isi/mhs/mhs.php';
          }else if($hal == 'Tambah-Mahasiswa'){
            require 'isi/mhs/addmhs.php';
          }else if($hal == 'Tugas'){
            require 'isi/tugas/tugas.php';
          }else if($hal == 'Tambah-Tugas'){
            require 'isi/tugas/addtugas.php';
          }else if($hal == 'Peminjaman-Uang'){
            require 'isi/pu/pu.php';
          }else if($hal == 'Tambah-Peminjaman-Uang'){
            require 'isi/pu/addpu.php';
          }else if($hal == 'Kas'){
            require 'isi/kas/kas.php';
          }else if($hal == 'Edit-Total-Kas'){
            require 'isi/kas/edit-kas.php';
          }else if($hal == 'Upload-Jawaban'){
            require 'isi/tugas/kumpulkan.php';
          }else if($hal == 'Bayar-Uang-Kas'){
            require 'isi/kas/byr.php';
          }else if($hal == 'Payment-Kas'){
            require 'isi/kas/prosesbyr.php';
          }else if($hal == 'Upload-Bayar'){
            require 'isi/kas/upload.php';
          }else if($hal == 'Generate-Kas'){
            require 'isi/kas/gen.php';
          }else if($hal == 'Personal-Kas'){
            require 'isi/kas/personal.php';
          }else if($hal == 'Cek-Upload'){
            require 'isi/kas/cekupload.php';
          }else if($hal == 'Update-Adm'){
            require 'isi/kas/adm.php';
          }

          else{
            require 'isi/utama.php';
          }
          ?>
          <div class="col-sm-12" style="text-align: center;">
            Develop with &#9829; by. Febro Herdyanto<br>
            Website : <a href="https://febroherdyanto.id" target="_blank">febroherdyanto.id</a><br>
            <div class="social-links">
            <a href="mailto:febroherdyanto@outlook.com" class="google-plus"><i class="fa fa-envelope"></i></a>
            <a href="https://linkedin.com/in/febroherdyanto" class="linkedin"><i class="ti-linkedin"></i></a>
            <a href="https://github.com/febroherdyanto" class="twitter"><i class="ti-github"></i></a>
            <a href="https://t.me/febroherdyanto" class="telegram"><i class="ti-headphone-alt"></i></a>
            <a href="https://twitter.com/febroherdyanto" class="twitter"><i class="ti-twitter"></i></a>
            <a href="https://www.facebook.com/FebroHerdyantoAlmura" class="facebook"><i class="ti-facebook"></i></i></a>
            <a href="https://instagram.com/febroherdyanto" class="instagram"><i class="ti-instagram"></i></a>
          </div>
        </div>
        <!-- content-wrapper ends -->
        
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

