<<?php include '../xcon.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Admin</title>

    <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
      <div class="container">
          <h1>Tambah Data Tugas</h1>
<?php

if(isset($_POST['submit'])){
  $xid = '';
  $xnama = trim(stripslashes(htmlspecialchars(strtoupper($_POST['nama']))));
  $xmatkul = trim(stripslashes(htmlspecialchars(strtoupper($_POST['matkul']))));
  $xdosen = trim(stripslashes(htmlspecialchars($_POST['dosen'])));
  $xdate = trim(stripslashes(htmlspecialchars($_POST['tgl'])));
  $xjam = trim(stripslashes(htmlspecialchars($_POST['jam'])));
  $xfolder = trim(stripslashes(htmlspecialchars(strtoupper($_POST['folder']))));
  $quee = "INSERT INTO tugas (id_tugas, nama_tugas, matkul, dosen, due_date, due_time,folder) VALUES (NULL, '$xnama', '$xmatkul', '$xdosen', '$xdate', '$xjam', '$xfolder')";
  $xque = mysqli_query($xkon, $quee);
  if($xque == TRUE){
    echo "<div class='card-panel teal lighten-2' style='font-size: 30px;'><i class='material-icons'>check</i> DATA BERHASIL DISIMPAN</div>";
  }else{
    echo "<div class='card-panel red darken-1' style='font-size: 30px; color: white;'><i class='material-icons'>warning</i> DATA GAGAL DISIMPAN </div>".mysqli_error($xkon);
  }
}

?>



          <div class="row">
  <form class="col s12" method="post" action="">
    <div class="row">
      <div class="input-field col s12">
        <input id="nama" type="text" name="nama" class="validate">
        <label for="nama">Nama Tugas</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="matkul" name="matkul" type="text" class="validate">
        <label for="matkul">Mata Kuliah</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="dosen" name="dosen" type="text" class="validate">
        <label for="dosen">Nama Dosen</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="tgl" name="tgl" type="date" class="datepicker">
        <label for="tgl">Batas Tanggal Pengumpulan Tugas</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="jam" name="jam" type="time" class="timepicker">
        <label for="jam">Batas Jam Pengumpulan Tugas</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="folder" name="folder" type="text" class="validate">
        <label for="folder">Folder Tugas</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
          <i class="material-icons right">send</i>
        </button>
      </div>
    </div>

  </form>
</div>



      </div>
  </body>
</html>
