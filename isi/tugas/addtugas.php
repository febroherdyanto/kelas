            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><i class="fa fa-plus"></i> Tambah Data Tugas</h4>
                  <p class="card-description"> </p>
<?php

if(isset($_POST['submit'])){
  $xid = '';
  $xnama = trim(stripslashes(htmlspecialchars(strtoupper($_POST['nama']))));
  $xmatkul = trim(stripslashes(htmlspecialchars(strtoupper($_POST['matkul']))));
  $xdosen = trim(stripslashes(htmlspecialchars($_POST['dosen'])));
  $xdate = trim(stripslashes(htmlspecialchars($_POST['tgl'])));
  $xjam = trim(stripslashes(htmlspecialchars($_POST['jam'])));
  $xfolder = trim(stripslashes(htmlspecialchars(strtoupper($_POST['folder']))));
  $xmaks = trim(stripslashes(htmlspecialchars(strtoupper($_POST['max_files']))));
  $xkata = trim(stripslashes(htmlspecialchars(strtoupper($_POST['kata_max']))));
  $quee = "INSERT INTO tugas (id_tugas, nama_tugas, matkul, dosen, due_date, due_time, folder, max_files, kata_max) VALUES (NULL, '$xnama', '$xmatkul', '$xdosen', '$xdate', '$xjam', '$xfolder', '$xmaks', '$xkata')";
  $xque = mysqli_query($xkon, $quee);
  
  

  
  
  if($xque == TRUE){
      
        mkdir('isi/tugas/XFILES/'.$xfolder); //create the directory
        $targetfilename = $xfolder;
        chmod($targetfilename, 0777); //make it writable
        echo '<div class="col-md-12 stretch-card transparent">
        <div class="card card-light-info" style="background: #03fc77;">
          <div class="card-header">
          <strong><i class="fa fa-check"></i> SUKSES !</strong> <br> Tugas berhasil ditambahkan.
          </div>
        </div>
      </div>';
  }else{
    echo '<div class="col-md-12 stretch-card transparent">
                      <div class="card card-light-danger">
                        <div class="card-header">
                        <strong><i class="fa fa-exclamation-triangle"></i> GAGAL !</strong> <br> Tugas gagal ditambahkan</div>
                      </div>
                    </div>'.mysqli_error($xkon);
  }
}

?>

<form class="col s12" method="post" action="">

<div class="form-group row">
    <label class="col-sm-3 col-form-label">Nama Tugas</label>
    <div class="col-sm-9">
        <input type="text" name="nama" class="form-control" placeholder="Nama tugas akan berpengaruh di nama file" required>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Mata Kuliah</label>
    <div class="col-sm-9">
        <input type="text" name="matkul" class="form-control" placeholder="Nama Mata Kuliah" required>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Nama Dosen</label>
    <div class="col-sm-9">
        <input type="text" name="dosen" class="form-control" placeholder="Nama Dosen Mata Kuliah" required>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Batas Tanggal Pengumpulan Tugas</label>
    <div class="col-sm-9">
        <input type="date" name="tgl" class="form-control" placeholder="Pilih Tanggal" required>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Batas Jam Pengumpulan Tugas</label>
    <div class="col-sm-9">
        <input type="time" name="jam" id="" class="form-control" placeholder="Pilih Jam" required>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Folder</label>
    <div class="col-sm-9">
        <input type="text" name="folder" class="form-control" placeholder="Masukkan Folder yang akan dibuat" required>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Ukuran Maksimal File (100 KB = 100.000) Isi Tanpa Titik</label>
    <div class="col-sm-9">
        <input type="text" name="max_files" class="form-control" placeholder="Contoh : 300000 (untuk 300 KB)" required>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Teks Maksimal File (Contoh : 100 KB)</label>
    <div class="col-sm-9">
        <input type="text" name="kata_max" class="form-control" placeholder="Contoh : 300 KB" required>
    </div>
</div>

<button type="submit" name="submit" class="btn btn-primary mr-2"><i class="fa fa-save"></i> Simpan</button>



  </form>
</div>



      </div>
  </body>
</html>
