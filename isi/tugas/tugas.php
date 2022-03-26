<script type="text/javascript">
    $(document).ready(function() {
    $('#tabelku').DataTable();
    } );
  </script>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daftar Tugas TI.20.B.1</h4>
                  <p class="card-description">
                     
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped" id="tabelku">
                      <thead>
                        <tr style="text-align: center;">
                        <th>No.</th>
                        <th>Nama Tugas</th>
                        <th>Mata Kuliah</th>
                        <th>Due Date</th>
                        <th>Due Time</th>
                        <th>Status</th>
                        <th>Data Mhs.</th>
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
                        ?>

                            <tr>
                            <td style="text-align: center;"><?php echo $no++; ?></td>
                            <td><?php echo $xd['nama_tugas']; ?></td>
                            <td><?php echo $xd['matkul']; ?></td>
                            <td style="text-align: center;"><?php echo date("d F Y", strtotime($xd['due_date'])); ?></td>
                            <td style="text-align: center;"><?php echo $xd['due_time']; ?></td>
                            <td style="text-align: center;"><?php if($date_now > $xd['due_date']){ echo "TIDAK AKTIF"; }else{ 
                                        //AKAH MASIH BISA DENGAN JAM ? 
                                          if($time_now > $xd['due_time']){
                                            echo "JAM SELESAI";
                                          }else{?>
                                            <a href="index.php?halaman=Upload-Jawaban&xid=<?php echo $xd['id_tugas']; ?>">
                                              <button type="submit" class="btn btn-sm btn-primary" name="upp"><i class="fa fa-upload"></i> Upload Jawaban</button>
                                            </a>
                                    <?php }
                                      } ?>
                            </td>
                            <td style="text-align: center;"><a href="index.php?halaman=Tugas-Mahasiswa&xid=<?php echo $xd['id_tugas']; ?>"><i class="fa fa-eye"></i>  Lihat</a></td>

                            </tr>

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>