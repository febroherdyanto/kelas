<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Download Data Jawaban Tugas</h4>
                  <p class="card-description">
                     <a href="<?php echo $_SERVER['DOCUMENT_ROOT'].'/drive/'; ?>" target="_blank">Linkk</a>
                     <br>
                     <?php echo $_SERVER[HTTP_HOST].'/drive/'; ?>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped" id="tabelku">
                      <thead>
                        <tr style="text-align: center;">
                        <th>No.</th>
                        <th>Nama Tugas</th>
                        <th>Mata Kuliah</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Jawaban Mhs</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            error_reporting(0);
                        $sel = mysqli_query($xkon, "select * from tugas order by id_tugas desc");
                        $date_now = date("Y-m-d");
                        $time_now = time("H:i:s");
                        $no = 1;
                        while($xd = mysqli_fetch_array($sel)){
                          $folder = $xd['folder'];
                        ?>

                            <tr>
                            <td style="text-align: center;"><?php echo $no++; ?></td>
                            <td><?php echo $xd['nama_tugas']; ?></td>
                            <td><?php echo $xd['matkul']; ?></td>
                            <td style="text-align: center;"><?php echo date("d F Y", strtotime($xd['due_date'])); ?> <?php echo $xd['due_time']; ?></td>
                            <td style="text-align: center;"><?php if($date_now > $xd['due_date']){ echo "TIDAK AKTIF"; }else{ 
                                        //AKAH MASIH BISA DENGAN JAM ? 
                                          if($time_now > $xd['due_time']){
                                            echo "JAM SELESAI";
                                          }else{ 
                                              echo "AKTIF";
                                          }
                                      } ?>
                            </td>
                            <td style="text-align: center;"><a href="drive/tinyfilemanager.php?p=<?php echo $folder; ?>" target="_blank"><i class="fa fa-eye"></i>  Download Jawaban</a></td>
                            </tr><?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>