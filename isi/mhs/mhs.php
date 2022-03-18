<script type="text/javascript">
    $(document).ready(function() {
    $('#tabelku').DataTable();
    } );
  </script>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Mahasiswa TI.20.B.1</h4>
                  <p class="card-description">
                     
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped" id="tabelku">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>NIM</th>
                          <th>Nama Mahasiswa</th>
                          <th>Kelas</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <?php
                        $no = 1;
                        $sel = mysqli_query($xkon, "select * from mahasiswa order by nim asc");
                        while($xd = mysqli_fetch_array($sel)){
                        ?>

                            <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $xd['nim']; ?></td>
                              <td><?php echo $xd['nama_lengkap']; ?></td>
                              <td><?php if($xd['kelas'] == 'YA'){ echo "TI.20.B.1"; }else{ echo "Kelas Lain";} ?></td>

                            </tr>

                        <?php } ?>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>