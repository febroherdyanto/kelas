<?php
$getid = addslashes($_GET['xid']);
$qcektugas = mysqli_query($xkon, "select * from tugas where id_tugas=$getid");
while($dtugas = mysqli_fetch_array($qcektugas)){

?>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Mahasiswa yang telah mengumpulkan tugas : <?php echo $dtugas['nama_tugas']; ?></h4>
                  <p class="card-description">
                      Mata Kuliah : <?php echo $dtugas['matkul']; ?> <br>
                      Dosen Pengampu : <?php echo $dtugas['dosen']; ?>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped" id="tabelku">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Tanggal Upload</th>
                            <th>Waktu Upload</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $query = mysqli_query($xkon, "select * from pengumpulan where id_tugas=$getid");
                        $no = 0;
                        while($data = mysqli_fetch_array($query)){
                            $id_mhs = $data['id_mhs'];
                            $tgl = $data['tgl'];
                            $no++;
                            
                            $qcekmhs = mysqli_query($xkon, "select * from mahasiswa where id_mhs=$id_mhs");
                            $dmhs = mysqli_fetch_array($qcekmhs);
                            $nim = $dmhs['nim'];
                            $nama = $dmhs['nama_lengkap'];
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $nim; ?></td>
                            <td><?php echo $nama; ?></td>
                            <td><?php echo date("d F Y", strtotime($tgl)); ?></td>
                            <td><?php echo $data['jam']; ?> WIB</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

<?php } ?>