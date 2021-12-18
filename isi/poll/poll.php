<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Polling TI.20.B.1</h4>
            </p class="card-description">
            </p>
            
            <div class='table-responsive'>
                <table class="table table-striped" id="tabelku">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Polling</td>
                            <td>Tanggal Mulai</td>
                            <td>Tanggal Berakhir</td>
                            <td>Status</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        $date_now = date("Y-m-d");
                        $qpol = mysqli_query($xkon, "select * from p_polling order by id_poll DESC");
                        while($dpol = mysqli_fetch_array($qpol)){
                            $no++
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $dpol['judul']; ?></td>
                            <td><?php echo date("d F Y", strtotime($dpol['tgl_mulai'])); ?></td>
                            <td><?php echo date("d F Y", strtotime($dpol['tgl_selesai'])); ?></td>
                            <td>
                                <?php if($date_now > $dpol['tgl_selesai']){ echo "TIDAK AKTIF"; }else{ ?>
                                <a href="index.php?halaman=Ikuti-Polling&xid=<?php echo $dpol['id_poll']; ?>">
                                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> Ikuti Polling</button>
                                </a>
                                <?php } ?>
                            </td>
                            <td>IKUTI | LIHAT HASIL</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            
        </div>
    </div>
</div>