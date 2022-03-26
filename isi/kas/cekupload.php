<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Daftar Bukti Bayar Uang Kas</h4>
                <p class="card-description">
                </p>
            
                <div class="table-responsive">
                    <table class="table table-striped" id="tabelku">
                      <thead>
                        <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Tahun Bayar</th>
                        <th>Tanggal - Jam Upload</th>
                        <th>Keterangan</th>
                        <th>Lihat File</th>
                        <th>Proses Bayar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            error_reporting(0);
                        $sel = mysqli_query($xkon, "select * from k_upload order by id_upload DESC");
                        $no = 1;
                        while($xd = mysqli_fetch_array($sel)){
                            $xid_upload = $xd['id_upload'];
                            $xid_detail = $xd['id_detail'];
                            $xtgl = date("d F Y", strtotime($xd['tgl']));
                            $xjam = $xd['jam'];
                            $xfile = $xd['file'];
                            $xdetail = $xd['detail'];
                            $xstatus =$xd['status'];

                            $cekdetail = mysqli_query($xkon, "select id_tahun, id_mhs from k_detail where id_detail=$xid_detail ");
                            while($cd = mysqli_fetch_array($cekdetail)){
                                $cdid_tahun = $cd['id_tahun'];
                                $cdid_mhs = $cd['id_mhs'];

                                $cektahun = mysqli_query($xkon, "select * from k_tahun where id_tahun=$cdid_tahun ");
                                while($ct = mysqli_fetch_array($cektahun)){
                                    $ctnm_tahun = $ct['nm_tahun'];
                                
                                $cekmhs = mysqli_query($xkon, "select nim, nama_lengkap from mahasiswa where id_mhs=$cdid_mhs ");
                                while($cm = mysqli_fetch_array($cekmhs)){
                                    $cmnim = $cm['nim'];
                                    $cmnama_lengkap = $cm['nama_lengkap']
                                
                            
                        ?>

                            <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $cmnim; ?></td>
                            <td><?php echo $cmnama_lengkap; ?></td>
                            <td><?php echo $ctnm_tahun; ?></td>
                            <td><?php echo $xtgl.' - '.$xjam; ?></td>
                            <td><?php echo $xdetail; ?></td>
                            <td>
                                <img src="isi/kas/XFILES/<?php echo $xfile; ?>" data-toggle="modal" data-target="#exampleModal<?php echo $xid_upload; ?>" style="width:100%; border-radius:0; max-width:300px">

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?php echo $xid_upload; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Bukti Bayar <?php echo $cmnama_lengkap ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Pada : <?php echo $xtgl.' - '.$xjam; ?> <br>
                                        Keterangan : <?php echo $xdetail; ?> <br>
                                        <img src="isi/kas/XFILES/<?php echo $xfile; ?>" style="width:100%; height:100%; border-radius:0; max-height:800px; max-width:500px">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                            <td><?php if($xstatus == 'Y' ){ echo "UPDATED"; }else{ 
                                        ?>
                                            <a href="index.php?halaman=Update-Adm&id_detail=<?php echo $xid_detail; ?>&id_upload=<?php echo $xid_upload; ?>">
                                              <button type="submit" class="add btn btn-primary" name=""><i class="fa fa-credit-card"></i> Update</button>
                                            </a>
                                    <?php } ?>
                            </td>

                            </tr>

                        <?php } } } } ?>
                      </tbody>
                    </table>
                  </div>



        </div>
    </div>
</div>
