
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h2 class="card-title"> Tambah Data Mahasiswa TI.20.B.1</h2>

      <?php

      if(isset($_POST['submit'])){
        $xid = '';
        $xnim = trim(stripslashes(htmlspecialchars($_POST['nim'])));
        $xnama = trim(stripslashes(htmlspecialchars(strtoupper($_POST['nama']))));
        $xwa = trim(stripslashes(htmlspecialchars($_POST['wa'])));
        $xemail = trim(stripslashes(htmlspecialchars($_POST['email'])));
        $xkelas = trim(stripslashes(htmlspecialchars($_POST['kelas'])));

        $ceknim = "select * from mahasiswa where nim=$xnim";
        $qceknim = mysqli_query($xkon, $ceknim);
        $qdd = mysqli_fetch_array($qceknim);
          $onim = $qdd['nim'];
          $onama = $qdd['nama_lengkap'];
          if($xnim == $onim){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <h4 class="alert-heading"><strong><i class="bi-x-circle"></i> Gagal !</strong> Data kamu gagal diinput. </h4>
              <hr>
              <p class="mb-0">Nomor Induk Mahasiswa sudah terdaftar dalam Sistem ini. <br>
              NIM : '.$onim.'<br>
              Nama Mahasiswa : '.$onama.'</p>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'.mysqli_error($xkon);
          }else{
            $quee = "INSERT INTO mahasiswa (id_mhs, nim, nama_lengkap, no_hp, email, kelas) VALUES (NULL, '$xnim', '$xnama', '$xwa', '$xemail', '$xkelas')";
            $xque = mysqli_query($xkon, $quee);
            if($xque == TRUE){
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="bi-check-circle"></i> Sukses !</strong> Data kamu berhasil diinput.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }else{
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="bi-x-circle"></i> Gagal !</strong> Data kamu gagal diinput.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>'.mysqli_error($xkon);
            }
          }
      }

      ?>

    </div>
    <div class="card-body">

      <form class="col s12" method="post" action="">
        <div class="row">
          <div class="form-floating mb-2">
            <input type="text" name="nim" id="nim" class="form-control" id="floatingInput" placeholder="  Nomor Induk Mahasiswa" required>
            <label for="floatingInput">  Nomor Induk Mahasiswa *</label>
          </div>
        </div>

        <div class="row">
          <div class="form-floating mb-2">
            <input type="text" name="nama" id="nama" class="form-control" id="floatingInput" placeholder="  Nama Lengkap Mahasiswa" required>
            <label for="floatingInput">Nama Lengkap Mahasiswa *</label>
          </div>
        </div>

        <div class="row">
          <div class="form-floating mb-2">
            <input type="text" name="wa" id="wa" class="form-control" id="floatingInput" placeholder="  Nomor HP / WhatsApp" required>
            <label for="floatingInput">Nomor HP / WhatsApp *</label>
          </div>
        </div>

        <div class="row">
          <div class="form-floating mb-2">
            <input type="email" name="email" id="email" class="form-control" id="floatingInput" placeholder="  Masukkan Email Pelita Bangsa" required>
            <label for="floatingInput">E-mail Pelita Bangsa *</label>
          </div>
        </div>

        <div class="row">
          <label for="floatingInput">Kelas *</label>
        <div class="form-check">
          <label class="form-check-label" for="flexRadioDefault1">
            <input class="form-check-input" type="radio" name="kelas" id="kelas" value="YA"> TI.20.B.1
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label" for="flexRadioDefault2">
            <input class="form-check-input" type="radio" name="kelas" id="kelas" value="TIDAK" checked> Kelas Lain
          </label>
        </div>
        </div>

        <div class="row">
          <div class="form-floating mb-2">
            <button type="submit" name="submit" id="submit"  class="btn btn-primary">SIMPAN <i class="bi-arrow-right-circle"></i> </button>
          </div>
        </div>



      </form>
    </div>
  </div>
</div>
