<?php include 'xcon.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Admin</title>

    <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Additional Source -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="JsLocalSearch.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


  </head>
  <body>
      <div class="container">
          <h1>Form Pengajuan Peminjaman Uang Kas</h1>

<?php
if(isset($_POST['submit'])){


  $xid = '';
  $xidtugas = $_POST['idtugas'];
  $xnim = trim(stripslashes(htmlspecialchars($_POST['nim'])));
  $xnamamhs = $_POST['nama'];
  $xnamatugas = $_POST['nama_tugas'];
  $tgl = date("Y-m-d");


  $qceknim = mysqli_query($xkon, "select id_mhs from mahasiswa where nim='$xnim'");
  $fqceknim = mysqli_fetch_array($qceknim);
  $xid_mhs = $fqceknim['id_mhs'];


  $namafile = $xnamamhs."_".$xnim."_".$xnamatugas.".pdf";
  $targetfolder = "MASKRIT1/";
  $targetfolder = $targetfolder . basename($xnamamhs."_".$xnim."_".$xnamatugas.".pdf") ;
 $file_type=$_FILES['file']['type'];



 if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {

   if ($_FILES["file"]["size"] > 300000) {
     echo "<div class='card-panel red darken-1' style='font-size: 30px; color: white;'><i class='material-icons'>warning</i> TUGAS GAGAL DI-UPLOAD. PASTIKAN UKURAN FILE KURANG DARI 300 KB </div>";
     $uploadOk = 0;
   }else{

  if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
  {

    $qupl = mysqli_query($xkon, "insert into pengumpulan (id_pengumpulan, id_tugas, id_mhs, tgl, file) values (NULL, $xidtugas, $xid_mhs, '$tgl', '$namafile')");
    if($qupl == true){
      echo "<div class='card-panel teal lighten-2' style='font-size: 30px;'><i class='material-icons'>check</i> TERIMA KASIH, TUGAS BERHASIL DI-UPLOAD</div>";
    }else{
      echo "<div class='card-panel red darken-1' style='font-size: 30px; color: white;'><i class='material-icons'>warning</i> TUGAS BERHASIL DI-UPLOAD. TETAPI TIDAK TERSIMPAN DI DATABASE </div>";
    }


  }  else {
  echo "<div class='card-panel red darken-1' style='font-size: 30px; color: white;'><i class='material-icons'>warning</i> TUGAS GAGAL DI-UPLOAD. PASTIKAN UKURAN FILE KURANG DARI 300 KB DAN FILE PDF </div>";
  }

}
 } else {
  echo "<div class='card-panel red darken-1' style='font-size: 30px; color: white;'><i class='material-icons'>warning</i> TUGAS GAGAL DI-UPLOAD. PASTIKAN UKURAN FILE KURANG DARI 300 KB DAN FILE PDF </div>";
 }



}

?>



          <div class="row">
  <form class="col s12" method="post" action="" enctype="multipart/form-data">
<!-- CEK NIM -->
<script type="text/javascript">
    function isi_otomatis(){
        var nim = $("#nim").val();
        $.ajax({
            url: 'ajaxnim.php',
            data:"nim="+nim ,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
            $('#nama').val(obj.nama);
            $('#no_hp').val(obj.no_hp);
            $('#email').val(obj.email);

        });
    }
</script>

    <div class="row">
      <div class="input-field col s12">
        <input id="nim" type="text" name="nim" onkeyup="isi_otomatis()" class="validate" required>
        <label for="nim">Nomor Induk Mahasiswa *</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
      Nama Mahasiswa
        <input id="nama" type="text" name="nama" placeholder="Kolom Tidak Boleh Diisi" readonly>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
      Nomor HP / WhatsApp
        <input id="no_hp" type="text" name="no_hp" placeholder="Kolom Tidak Boleh Diisi" readonly>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
      Email
        <input id="email" type="text" name="email" placeholder="Kolom Tidak Boleh Diisi" readonly>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <input id="rupiah" type="text" name="uang" required>
        <label for="nim">Jumlah Peminjaman Uang *</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <input type="text" name="alasan" required>
        <label for="nim">Alasan Peminjaman Uang *</label>
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
