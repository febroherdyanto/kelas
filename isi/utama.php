          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-0 mb-xl-0">
                  <h3 class="font-weight-bold">Selamat Datang <?php echo $_SESSION['nama_lengkap']." - ".$_SESSION['level']; ?> di Sistem Informasi Kelas TI.20.B.1</h3>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
          <div class="col-md-12 mb-0 stretch-card transparent">
            <div class="alert alert-success" role="alert">
              <h4 class="alert-heading">Happy Birthday !</h4>
              <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
              <hr>
              <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
            </div>
          </div>
          </div>

          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Jakarta</h4>
                        <h6 class="font-weight-normal">Indonesia</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Mahasiswa</p>
                      <p class="fs-30 mb-2"><i class="fa fa-users"></i>
                      <?php $count = mysqli_query($xkon, "select * from mahasiswa");
                      $qsel = mysqli_num_rows($count);
                      echo $qsel; ?> Mahasiswa</p>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Uang Kas</p>
                      <?php
                          $sel = mysqli_query($xkon, "select * from k_kas where id_kas=1");
                          while($xd = mysqli_fetch_array($sel)){
                          $jml_kas = $xd['jml_kas'];
                          $last_update = $xd['last_update'];
                          $update_by = $xd['update_by'];

                              function buatRupiah($angka){
                                  $hasil = "Rp " . number_format($angka,0,',','.');
                                  return $hasil;
                              }
                      ?>
                      <p class="fs-30 mb-2"><?php echo buatRupiah($jml_kas) ?></p>
                                <p><i>Terakhir diperbarui : <?php echo date('d F Y', strtotime($last_update));  ?></i><br>
                                Oleh : <?php 
                                $qc2 = mysqli_query($xkon, "select nama_lengkap from mahasiswa where nim='$update_by'");
                                while($qqc2 = mysqli_fetch_array($qc2)){
                                    echo $qqc2['nama_lengkap'];
                                } }?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Total Tugas</p>
                      <p class="fs-30 mb-2"><i class="fa fa-book"></i>
                      <?php $count = mysqli_query($xkon, "select * from tugas");
                      $qsel = mysqli_num_rows($count);
                      echo $qsel; ?> Tugas</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Develop by. </p>
                      <p class="fs-30 mb-2"><i class="fa fa-code"></i> <a href="https://febroherdyanto.id" style="color: white; font-weight: bold;">BPH TI20B1</a></p>
                      <p>Made with &#9829;</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          