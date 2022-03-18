<?php
$xid_tahun = stripslashes(htmlspecialchars($_GET['tahun']));
$xnim = stripslashes(htmlspecialchars($_GET['nim']));

$ceknim = mysqli_query($xkon, "select id_mhs, nim, nama_lengkap from mahasiswa where nim=$xnim");
while($qceknim = mysqli_fetch_array($ceknim)){
    $cek_idmhs = $qceknim['id_mhs'];
    $cek_namalengkap = $qceknim['nama_lengkap'];
    $ceknim = $qceknim['nim'];

    $qr = mysqli_query($xkon, "select * from k_detail where id_mhs=$cek_idmhs and id_tahun=$xid_tahun"); 
    $qrr = mysqli_fetch_assoc($qr); 
        $xiddet = $qrr['id_detail'];
?>
 







<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="text-align: center;"></h4>
                <p class="card-description">
                <div class="row">
                    <div class="col-md-12 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="fs-30 mb-2" style="text-align: center"><b>Proses Pembayaran Uang Kas</b><br></p>
                                <p class="mb-2">
                                    <br><h4>HALO, <?php echo $cek_namalengkap; ?> (<?php echo $ceknim; ?>)</h4>

                                    Silahkan lakukan pembayaran melalui Bank Jago dibawah ini, dan jangan lupa untuk upload bukti bayar agar dapat divalidasi oleh Bendahara Kelas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

<?php } ?>

                </p>

                <div class="row">
                    <div class="col-lg-5">
                        
                    <div class="col-md-12 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                            <p class="mb-4">Details : </p>
                            <p class="fs-30 mb-2" style="font-weight: bold;"><i class="fa fa-building"></i> BANK JAGO</p>
                            <hr>
                            <p><i class="fa fa-credit-card"></i> Nomor Rekening : <b>100331271322</b>
                            <br>
                            <i class="fa fa-user"></i> Atasnama : Miftahu Rizkiyah (Kantong Bersama : <b>KAS TI.20.B.1</b>)</p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6">

                    <?php
//=========================== UPLOAD BUKTI PROSES ========================
if(isset($_POST['submit'])){
    $id_up = '';
    $detail = trim(stripslashes(htmlspecialchars($_POST['detail'])));
    $tgl = date("Y-m-d");
    date_default_timezone_set('Asia/Jakarta');
    $jam = date("H:i:s");
    
    $namafile = $_FILES['picture']['name'];  
    $ukuran = $_FILES['picture']['size'];  
    $error = $_FILES['picture']['error'];  
     
    // bila ukuran file lebih besar dari 0 dan tidak ada error
    if($ukuran > 0 || $error == 0){  
        // pindahkan file gambar dari temporary folder ke folder gambar	
        $move = move_uploaded_file($_FILES['picture']['tmp_name'], 'isi/kas/XFILES/'.$namafile);  
        if($move){  
            $qupl = mysqli_query($xkon, "insert into k_upload (id_upload, id_detail, tgl, jam, file, detail) values (NULL, '$xiddet', '$tgl', '$jam', '$namafile', '$detail' )");
            if($qupl == 1){
                // pesan bila gambar berhasil di upload	
                echo '<div class="col-md-12 stretch-card transparent">
                            <div class="card card-light-info" style="background: #03fc77;">
                                <div class="card-header">
                                <strong><i class="fa fa-check"></i> SUKSES !</strong> <br>File berhasil diupload.
                                </div>
                            </div>
                            </div>';
            }else{
                echo "GAGAL UPLOAD DATABASE".mysqli_error($xkon);
            }
        } else {  
            echo '<div class="col-md-12 stretch-card transparent">
                    <div class="card card-light-danger">
                    <div class="card-header">
                    <strong><i class="fa fa-exclamation-triangle"></i> GAGAL !</strong> <br>FILE GAGAL DI-UPLOAD. PASTIKAN UKURAN FILE KURANG DARI 1 MB DAN FILE JPEG / JPG / PNG  </div>
                    </div>
                    </div>'.mysqli_error($xkon);
            echo "Terjadi kesalahan sewaktu mengupload file";  
        }  
    }else {   
        echo "File gagal diupload karena : ".$error;  
    }  
    }
?>

                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Upload Bukti Bayar</label>
                                <input type="file" name="file" class="file-upload-default">
                                <div class="input-group col-sm-9">
                                    <input type="file" name="picture" class="form-control file-upload-info" placeholder="Upload Jawaban" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Keterangan</label>
                                <input type="file" name="file" class="file-upload-default">
                                <div class="input-group col-sm-9">
                                    <textarea name="detail" class="form-control" placeholder="Berikan Keterangan mengenai pembayaran"></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" name="submit" class="btn btn-info mr-2"><i class="fa fa-save"></i> Upload</button>
                            </div>
                        </form>
                    </div>
                </div>


        </div>
    </div>
</div>

<?php ?>