<?php
$xidpol = addslashes($_GET['xid']);

$qcekpol = mysqli_query($xkon, "select * from p_polling where id_poll=$xidpol");
while($dpol = mysqli_fetch_array($qcekpol)){

?>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="font-weight: bold; color: #5443a8">HASIL POLLING <?php echo $dpol['judul']; ?></h4>
            </p class="card-description">
            </p>
            
            <div class='table-responsive'>
            <?php
            $qtanya = mysqli_query($xkon, "select * from p_tanya where id_poll=$xidpol order by no_tanya ASC ");
            while($tanya = mysqli_fetch_assoc($qtanya)){
                $id_tanya = $tanya['id_tanya'];
                $pertanyaan = $tanya['pertanyaan']; 
                
                echo "<h6>$pertanyaan</h6>";
                ?>

                <table class="table table-striped" id="tabelku">
                    <thead>
                        <tr style="font-weight: bold;">
                            <td>No</td>
                            <td>Nama Opsi</td>
                            <td>Total Vote</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $qopt = mysqli_query($xkon, "select * from p_opsi where id_tanya=$id_tanya");
                            while($opt = mysqli_fetch_assoc($qopt)){
                                $id_opsi = $opt['id_opsi'];
                                $opsi = $opt['opsi']; ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $opsi; ?></td>
                            <td><?php 
                                $qjwb = mysqli_query($xkon, "select * from p_jawaban where id_opsi=$id_opsi");
                                $jwb = mysqli_num_rows($qjwb);
                                    echo $jwb;
                            ?>
                            </td>
                            <td> <i>Feature under maintenance</i></td>
                        </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            <?php } ?>
            </div>

            
        </div>
    </div>
</div>
<?php } ?>