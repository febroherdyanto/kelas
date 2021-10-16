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
          <h1>Upload Tugas</h1>

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
    <!-- PILIHAN TUGAS -->
    <script type="text/javascript">
        function isi_otomatis2(){
            var kode_tugas = $("#kode_tugas").val();
            $.ajax({
                url: 'ajax2.php',
                data:"kode_tugas="+kode_tugas,
            }).success(function (data) {
                var json = data,
                obj = JSON.parse(json);
                $('#nama_tugas').val(obj.nama);
                $('#matkul').val(obj.matkul);
                $('#dosen').val(obj.dosen);
                $('#due_date').val(obj.due_date);
                $('#id_tugas').val(obj.id_tugas);
            });
        }
    </script>
    <input type="text" name="idtugas" id="id_tugas" hidden>
    <div class="row">
      <div class="input-field col s12">
        <input id="kode_tugas" type="text" name="kode_tugas" onkeyup="isi_otomatis2()" class="validate" required>
        <label for="kode_tugas">Kode Tugas *</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
      Nama Tugas
        <input id="nama_tugas" name="nama_tugas" type="text" readonly>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
      Mata Kuliah
        <input id="matkul" type="text" readonly>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
      Nama Dosen
        <input id="dosen" type="text" readonly>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
      Tanggal Berakhirnya Tugas
        <input id="due_date" type="text" readonly>
      </div>
    </div>



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
        Upload Tugas
        <div class="file-field input-field">
          <div class="btn">
            <span>File</span>
            <input type="file" name="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload Tugas Anda disini">
          </div>
        </div>
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
