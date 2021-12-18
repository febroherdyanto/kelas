
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <?php 
                        $xxidd = addslashes($_GET['xid']);

                      

                      $cektugass = mysqli_query($xkon, "select * from tugas where id_tugas='$xxidd'");
                      $ddtugas = mysqli_fetch_array($cektugass);
                      $folderr = $ddtugas['folder'];
                      $maksfile = $ddtugas['max_files']; 
                      $kataa = $ddtugas['kata_max']; 
                      $nmtugas = $ddtugas['nama_tugas'];
                    ?>
                  <h4 class="card-title"><i class="fa fa-upload"></i> Upload Jawaban <?php echo $nmtugas; ?></h4>
                  <p class="card-description">
                    <div class="col-md-12 mb-4 stretch-card transparent">
                      <div class="card card-tale">
                        <div class="card-body">
                          <p class="fs-30 mb-2"><i class="fa fa-bell"></i> Informasi : </p>
                          <p>Nama Tugas :  <?php echo $nmtugas; ?><br>
                              Mata Kuliah : <?php echo $ddtugas['matkul']; ?> <br>
                              Dosen Pengampu : <?php echo $ddtugas['dosen']; ?> <br>
                              Batas Tanggal Pengumpulan Jawaban : <?php echo date("d F Y", strtotime($ddtugas['due_date'])); ?> <br>
                              Batas Jam Pengumpulan Jawaban : <?php echo $ddtugas['due_time']; ?> IB <br>
                              Format File : PDF <br>
                              Ukuran File Maksimal : <b><?php echo $kataa; ?></b>
                          </p>
                        </div>
                      </div>
                    </div>
                    <?php

                      //=========================== UPLOAD JAWABAN PROSES ========================
                    if(isset($_POST['submit'])){
                      $xnim = trim(stripslashes(htmlspecialchars($_POST['nim'])));
                      $tgl = date("Y-m-d");
                      date_default_timezone_set('Asia/Jakarta');
                      $jam = date("H:i:s");
                        

                      $qceknim = mysqli_query($xkon, "select id_mhs, nama_lengkap from mahasiswa where nim='$xnim'");
                      $fqceknim = mysqli_fetch_array($qceknim);
                      $xid_mhs = $fqceknim['id_mhs'];
                      $xnamamhs = $fqceknim['nama_lengkap'];


                      $namafile = $xnamamhs."_".$xnim."_".$nmtugas.".pdf";
                      $targetfolder = "isi/tugas/XFILES/".$folderr."/";
                      $targetfolder = $targetfolder . basename($xnamamhs."_".$xnim."_".$nmtugas.".pdf") ;
                      $file_type=$_FILES['file']['type'];


                    if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {
                      if ($_FILES["file"]["size"] > $maksfile) {
                        echo '<div class="col-md-12 stretch-card transparent">
                        <div class="card card-light-danger">
                          <div class="card-header">
                          <strong><i class="fa fa-exclamation-triangle"></i> GAGAL !</strong> <br>JAWABAN GAGAL DI-UPLOAD. PASTIKAN UKURAN FILE KURANG DARI '.$kataa.' DAN FILE PDF </div>
                        </div>
                        </div>'.mysqli_error($xkon);
                        $uploadOk = 0;
                      }else{
                        
                        if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)){

                          $qupl = mysqli_query($xkon, "insert into pengumpulan (id_pengumpulan, id_tugas, id_mhs, tgl, jam, file) values (NULL, $xxidd, $xid_mhs, '$tgl', '$jam', '$namafile')");
                          if($qupl == 1){
                            echo '<div class="col-md-12 stretch-card transparent">
                            <div class="card card-light-info" style="background: #03fc77;">
                              <div class="card-header">
                              <strong><i class="fa fa-check"></i> SUKSES !</strong> <br>Jawaban Anda berhasil disimpan.
                              </div>
                            </div>
                          </div>';
                          }else{
                            echo '<div class="col-md-12 stretch-card transparent">
                          <div class="card card-light-danger">
                            <div class="card-header">
                            <strong><i class="fa fa-exclamation-triangle"></i> GAGAL !</strong> <br> JAWABAN BERHASIL DI-UPLOAD. TETAPI TIDAK TERSIMPAN DI DATABASE. PASTIKAN NIM SESUAI DENGAN DATA DIRI ANDA</div>
                          </div>
                          </div>'.mysqli_error($xkon);
                          }


                        }  else {
                          echo '<div class="col-md-12 stretch-card transparent">
                          <div class="card card-light-danger">
                            <div class="card-header">
                            <strong><i class="fa fa-exclamation-triangle"></i> GAGAL !</strong> <br>JAWABAN GAGAL DI-UPLOAD. PASTIKAN UKURAN FILE KURANG DARI '.$kataa.'DAN FILE PDF </div>
                          </div>
                          </div>'.mysqli_error($xkon);
                        }
                      }
                    } else {
                      echo '<div class="col-md-12 stretch-card transparent">
                        <div class="card card-light-danger">
                          <div class="card-header">
                          <strong><i class="fa fa-exclamation-triangle"></i> GAGAL !</strong> <br>JAWABAN GAGAL DI-UPLOAD. PASTIKAN UKURAN FILE KURANG DARI '.$kataa.'DAN FILE PDF </div>
                        </div>
                      </div>'.mysqli_error($xkon);
                    }
                    }
                    ?>
                    
                  </p>





                  <form method="post" action="" enctype="multipart/form-data">

                      <!-- CEK NIM -->
                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                      <script>
                        function GetDetail(str) {
                            if (str.length == 0) {
                                document.getElementById("nama_lengkap").value = "";
                                return;
                            }
                            else {
                                var xmlhttp = new XMLHttpRequest();
                                xmlhttp.onreadystatechange = function () {
                                    if (this.readyState == 4 && 
                                            this.status == 200) {
                                        
                                        var myObj = JSON.parse(this.responseText);
                                        document.getElementById
                                            ("nama_lengkap").value = myObj[0];
                                            
                                    }
                                };

                                xmlhttp.open("GET", "ajax.php?user_id=" + str, true);
                                    
                                xmlhttp.send();
                            }
                        }
                        </script>



                      
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">NIM</label>
                      <div class="col-sm-9">
                        <input type="text" id="user_id" name="nim" class="form-control" onkeyup="GetDetail(this.value)" placeholder="3120xxxx" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-9">
                        <input type="text" id="nama_lengkap" name="nama" class="form-control" placeholder="Form akan terisi otomatis" readonly required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Upload Jawaban</label>
                      <input type="file" name="file" class="file-upload-default">
                      <div class="input-group col-sm-9">
                        <input type="file" name="file" class="form-control file-upload-info" placeholder="Upload Jawaban" required>
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2"><i class="fa fa-save"></i> Simpan</button>
                  </form>
                </div>
              </div>
            </div>