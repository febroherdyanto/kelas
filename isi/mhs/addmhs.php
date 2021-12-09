
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><i class="fa fa-user-plus"></i> Tambah Data Mahasiswa</h4>
                  <p class="card-description">
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
                        echo '
                        <div class="col-md-12 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-header">
                            <strong><i class="fa fa-exclamation-triangle"></i> Gagal !</strong> <br>Data kamu gagal diinput.<br>
                            <p>Nomor Induk Mahasiswa sudah terdaftar dalam Sistem ini. <br>
                            NIM : '.$onim.'<br>
                            Nama Mahasiswa : '.$onama.'</p>
                            </div>
                        </div>
                        </div>'.mysqli_error($xkon);
                        }else{
                        $quee = "INSERT INTO mahasiswa (id_mhs, nim, nama_lengkap, no_hp, email, kelas) VALUES (NULL, '$xnim', '$xnama', '$xwa', '$xemail', '$xkelas')";
                        $xque = mysqli_query($xkon, $quee);
                        if($xque == TRUE){
                            echo '<div class="col-md-12 stretch-card transparent">
                            <div class="card card-light-info" style="background: #03fc77;">
                              <div class="card-header">
                              <strong><i class="fa fa-check"></i> SUKSES !</strong> <br>Data kamu berhasil diinput.
                              </div>
                            </div>
                          </div>';
                        }else{
                            echo '<div class="col-md-12 stretch-card transparent">
                            <div class="card card-light-danger">
                              <div class="card-header">
                              <strong><i class="fa fa-exclamation-triangle"></i> Gagal !</strong> <br>Data kamu gagal diinput.
                              </div>
                            </div>
                          </div>'.mysqli_error($xkon);
                        }
                        }
                    }

                    ?>
                  </p>
                  <form method="post" action="">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">NIM</label>
                      <div class="col-sm-9">
                        <input type="text" name="nim" class="form-control" placeholder="3120xxxx" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-9">
                        <input type="text" name="nama" class="form-control" placeholder="Ketik Nama Anda" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nomor Handphone / WhatsApp</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="wa" placeholder="Nomor HP / WhatsApp" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email Pelita Bangsa</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" placeholder="Masukkan Email Pelita Bangsa" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Kelas</label>
                      <div class="col-sm-9">
                      <input type="radio" class="form-check-input" name="kelas" value="YA">TI.20.B.1 <br>
                      <input type="radio" class="form-check-input" name="kelas" value="TIDAK" checked>KELAS LAIN
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2"><i class="fa fa-save"></i> Simpan</button>
                  </form>
                </div>
              </div>
            </div>