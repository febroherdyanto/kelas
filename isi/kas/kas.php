<script type="text/javascript">
    $(document).ready(function() {
    $('#tabelku').DataTable();
    } );
  </script>
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

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Informasi Uang Kas TI.20.B.1</h4>
                  <p class="card-description">
                    <div class="row">
                        <div class="col-md-12 mb-4 stretch-card transparent">
                            <div class="card card-tale">
                                <div class="card-body">
                                <p class="mb-2">Total Uang Kas</p>
                                <p class="fs-30 mb-2"><?php echo buatRupiah($jml_kas) ?></p>
                                <p><i>Terakhir diperbarui : <?php echo date('d F Y', strtotime($last_update));  ?></i><br>
                                Oleh : <?php 
                                $qc2 = mysqli_query($xkon, "select nama_lengkap from mahasiswa where nim='$update_by'");
                                while($qqc2 = mysqli_fetch_array($qc2)){
                                    echo $qqc2['nama_lengkap'];
                                } ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                  </p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem voluptates saepe, enim consequatur commodi cumque recusandae, minima modi necessitatibus accusamus repellendus porro vel culpa aperiam officiis vitae incidunt, hic voluptate eligendi pariatur ratione quo doloribus eos? Assumenda distinctio fugit provident ratione, optio dignissimos hic impedit dolorum quaerat ipsam modi error, totam deserunt aperiam laudantium nihil laboriosam. Voluptatum dolor rerum laboriosam, sapiente error aliquam. Omnis consequatur minima commodi sapiente, voluptatum nobis rerum voluptas? Nulla nisi molestiae esse ipsa doloribus, quisquam delectus tempora cum voluptas vitae unde ullam? Vel repellat laborum ipsum ducimus fugit ratione eligendi, ullam sequi libero dolorem culpa cum?
                </div>
              </div>
            </div>
            <?php } ?>