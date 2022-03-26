<nav class="sidebar sidebar-offcanvas" id="sidebar">
<ul class="nav">
  <?php session_start();
  //================================================== TAMPILAN MENU ADMIN =========================================== //
  if($_SESSION['level'] == "admin"){ ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Mahasiswa</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Mahasiswa">Data Mahasiswa</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Tambah-Mahasiswa">Tambah Data</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <i class="fa fa-book"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Tugas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="index.php?halaman=Tugas">Data Tugas</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?halaman=Tambah-Tugas">Tambah Tugas</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?halaman=Download-Tugas">Download Tugas</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="ti-wallet"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Informasi Kas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Kas">Uang Kas</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Edit-Total-Kas">Edit Uang Kas</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Bayar-Uang-Kas">Bayar Kas</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Generate-Kas">Generate Data</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Personal-Kas">Update Personal</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Cek-Upload">Cek Upload Bayar</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="fa fa-database"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Pollings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Pollings">Data Polling</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Admin-Pollings">Admin Polling</a></li>
              </ul>
            </div>
          </li>

  <?php 
  //================================================== TAMPILAN MENU KETUA =========================================== //
  }else if($_SESSION['level'] == "ketua"){ ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Mahasiswa</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Mahasiswa">Data Mahasiswa</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Tambah-Mahasiswa">Tambah Data</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <i class="fa fa-tasks"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Tugas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="index.php?halaman=Tugas">Data Tugas</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?halaman=Tambah-Tugas">Tambah Tugas</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?halaman=Download-Tugas">Download Tugas</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="ti-wallet"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Informasi Kas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Kas">Uang Kas</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Edit-Total-Kas">Edit Uang Kas</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Bayar-Uang-Kas">Bayar Kas</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Generate-Kas">Generate Data</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Cek-Upload">Cek Upload Bayar</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="fa fa-database"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Pollings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Pollings">Data Polling</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Admin-Pollings">Admin Polling</a></li>
              </ul>
            </div>
          </li>
  <?php 
    //================================================== TAMPILAN MENU WAKIL KETUA =========================================== //
  }else if($_SESSION['level'] == "wakil"){ ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Mahasiswa</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Mahasiswa">Data Mahasiswa</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Tambah-Mahasiswa">Tambah Data</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <i class="fa fa-tasks"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Tugas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="index.php?halaman=Tugas">Data Tugas</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?halaman=Tambah-Tugas">Tambah Tugas</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?halaman=Download-Tugas">Download Tugas</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="ti-wallet"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Informasi Kas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Kas">Uang Kas</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Edit-Total-Kas">Edit Uang Kas</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Bayar-Uang-Kas">Bayar Kas</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Generate-Kas">Generate Data</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Cek-Upload">Cek Upload Bayar</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="fa fa-database"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Pollings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Pollings">Data Polling</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Admin-Pollings">Admin Polling</a></li>
              </ul>
            </div>
          </li>
  <?php 
    //================================================== TAMPILAN MENU SEKRETARIS =========================================== //
  }else if($_SESSION['level'] == "sekretaris"){ ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Mahasiswa</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Mahasiswa">Data Mahasiswa</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Tambah-Mahasiswa">Tambah Data</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <i class="fa fa-tasks"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Tugas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="index.php?halaman=Tugas">Data Tugas</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?halaman=Tambah-Tugas">Tambah Tugas</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?halaman=Download-Tugas">Download Tugas</a></li>
              </ul>
            </div>
          </li>          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="fa fa-database"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Pollings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Pollings">Data Polling</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Admin-Pollings">Admin Polling</a></li>
              </ul>
            </div>
          </li>
  <?php
  //================================================== TAMPILAN MENU BENDAHARA =========================================== //
  }else if($_SESSION['level'] == "bendahara"){ ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Mahasiswa</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Mahasiswa">Data Mahasiswa</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Tambah-Mahasiswa">Tambah Data</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <i class="fa fa-tasks"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Tugas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="index.php?halaman=Tugas">Data Tugas</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="ti-wallet"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Informasi Kas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Kas">Uang Kas</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Edit-Total-Kas">Edit Uang Kas</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Bayar-Uang-Kas">Bayar Kas</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Generate-Kas">Generate Data</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Personal-Kas">Update Personal</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Cek-Upload">Cek Upload Bayar</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="fa fa-database"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Pollings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Pollings">Data Polling</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Admin-Pollings">Admin Polling</a></li>
              </ul>
            </div>
          </li>
  <?php
  //================================================== TAMPILAN MENU MAHASISWA / UMUM =========================================== //
  } else{ ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Mahasiswa</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Mahasiswa">Data Mahasiswa</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Tambah-Mahasiswa">Tambah Data</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <i class="fa fa-tasks"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Tugas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="index.php?halaman=Tugas">Data Tugas</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="ti-wallet"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Informasi Kas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Kas">Uang Kas</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Bayar-Uang-Kas">Bayar Kas</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="fa fa-database"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Pollings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?halaman=Pollings">Data Polling</a></li>
              </ul>
            </div>
          </li>
  <?php } ?>
        </ul>
  </nav>