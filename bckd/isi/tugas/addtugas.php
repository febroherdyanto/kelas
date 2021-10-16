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

<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h2 class="card-title"> Tambah Data Tugas TI.20.B.1</h2>


      <?php

      if(isset($_POST['submit'])){
        $xid = '';
        $xkode = trim(stripslashes(htmlspecialchars(strtoupper($_POST['kode']))));
        $xnama = trim(stripslashes(htmlspecialchars(strtoupper($_POST['nama']))));
        $xmatkul = trim(stripslashes(htmlspecialchars(strtoupper($_POST['matkul']))));
        $xdosen = trim(stripslashes(htmlspecialchars($_POST['dosen'])));
        $xdate = trim(stripslashes(htmlspecialchars($_POST['tgl'])));
        $xjam = trim(stripslashes(htmlspecialchars($_POST['jam'])));
        $xfolder = trim(stripslashes(htmlspecialchars(strtoupper($_POST['folder']))));
        $quee = "INSERT INTO tugas (id_tugas, kode_tugas, nama_tugas, matkul, dosen, due_date, due_time,folder) VALUES (NULL, '$xkode', '$xnama', '$xmatkul', '$xdosen', '$xdate', '$xjam', '$xfolder')";
        $xque = mysqli_query($xkon, $quee);
        if($xque == TRUE){
          mkdir($xfolder);
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

      ?>


    </div>
    <div class="card-body">

            <form class="col s12" method="post" action="">
              <div class="row">
                <div class="form-floating mb-2">
                  <input type="text" name="kode" id="kode" class="form-control" id="floatingInput" placeholder="  Kode Tugas" required>
                  <label for="floatingInput">  Kode Tugas *</label>
                </div>
              </div>

              <div class="row">
                <div class="form-floating mb-2">
                  <input type="text" name="nama" id="nama" class="form-control" id="floatingInput" placeholder="  Nama Tugas" required>
                  <label for="floatingInput">Nama Tugas *</label>
                </div>
              </div>

              <div class="row">
                <div class="form-floating mb-2">
                  <input type="text" name="matkul" id="matkul" class="form-control" id="floatingInput" placeholder="  Mata Kuliah" required>
                  <label for="floatingInput">Mata Kuliah *</label>
                </div>
              </div>

              <div class="row">
                <div class="form-floating mb-2">
                  <input type="text" name="dosen" id="dosen" class="form-control" id="floatingInput" placeholder="  Nama Dosen" required>
                  <label for="floatingInput">Dosen *</label>
                </div>
              </div>

              <div class="row">
                <div class="form-floating mb-2">
                  <input type="date" name="tgl" id="tgl" class="form-control datepicker" id="floatingInput" placeholder="  Tanggal Berakhirnya Tugas" required>
                  <label for="floatingInput">Tanggal Berakhirnya Tugas *</label>
                </div>
              </div>

              <div class="row">
                <div class="form-floating mb-2">
                  <input type="time" name="jam" id="jam" class="form-control" id="floatingInput" placeholder="  Jam Berakhirnya Tugas" required>
                  <label for="floatingInput">Jam Berakhirnya Tugas *</label>
                </div>
              </div>

              <div class="row">
                <div class="form-floating mb-2">
                  <input type="text" name="folder" id="folder" class="form-control" id="floatingInput" placeholder="  Nama Dosen" required>
                  <label for="floatingInput">Folder Pengumpulan Tugas *</label>
                </div>
              </div>



              <div class="row">
                <div class="form-floating mb-2">
                  <button type="submit" name="submit" id="submit"  class="btn btn-primary">SIMPAN <i class="bi-arrow-right-circle"></i> </button>
                </div>
              </div>





    </div>
  </div>
</div>
