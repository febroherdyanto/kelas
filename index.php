<<?php include 'xcon.php'; ?>
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

  </head>
  <body>
      <div class="container">
          <h1>Tambah Data Mahasiswa</h1>

<?php

if(isset($_POST['submit'])){
  $xid = '';
  $xnim = trim(stripslashes(htmlspecialchars($_POST['nim'])));
  $xnama = trim(stripslashes(htmlspecialchars(strtoupper($_POST['nama']))));
  $xwa = trim(stripslashes(htmlspecialchars($_POST['wa'])));
  $xemail = trim(stripslashes(htmlspecialchars($_POST['email'])));
  $xkelas = trim(stripslashes(htmlspecialchars($_POST['kelas'])));
  $quee = "INSERT INTO mahasiswa (id_mhs, nim, nama_lengkap, no_hp, email, kelas) VALUES (NULL, '$xnim', '$xnama', '$xwa', '$xemail', '$xkelas')";
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
        <input type="text" name="nim" id="nim" class="validate">
        <label for="nim">Nomor Induk Mahasiswa</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="nama" type="text" name="nama" class="validate">
        <label for="nama">Nama Lengkap Mahasiswa</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="wa" name="wa" type="text" class="validate">
        <label for="wa">Nomor HP / WhatsApp</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="email" type="email" name="email" class="validate">
        <label for="email">Email</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label>Kelas : </label><br>
        <p>
          <label>
            <input name="kelas" type="radio" value="YA" checked />
            <span>TI.20.B.1</span>
          </label>
        </p>
        <p>
          <label>
            <input name="kelas" value="TIDAK" type="radio" />
            <span>Kelas Lain</span>
          </label>
        </p>
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
