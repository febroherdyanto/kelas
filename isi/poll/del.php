<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Hapus Data Polling</h3>
            </p class="card-description">
            <?php
            $idpol = addslashes($_GET['xid']);
            if(isset($_POST['lanjut'])){
                $qdel = mysqli_query($xkon, "delete from p_polling where id_poll=$idpol");
                if($qdel == TRUE){
                    echo '<div class="col-md-12 stretch-card transparent">
                            <div class="card card-light-info" style="background: #03fc77;">
                                <div class="card-header">
                                    <strong><i class="fa fa-check"></i> SUKSES !</strong> <br> Data berhasil dihapus.
                                </div>
                            </div>
                        </div>';
                        echo "<script>window.setTimeout(function () {
                            location.href = 'index.php?halaman=Admin-Pollings';
                            }, 2000);</script>";
                }else{
                    echo '<div class="col-md-12 stretch-card transparent">
                            <div class="card card-light-danger">
                                <div class="card-header">
                                    <strong><i class="fa fa-exclamation-triangle"></i> GAGAL !</strong> <br> Data gagal dihapus
                                </div>
                            </div>
                        </div>'.mysqli_error($xkon);
                }
            }?>
            </p>
            
            <h4><i>Apakah Anda yakin ingin menghapus Polling ini?</i></h4>
            <form action="" method="POST">
                <button type="submit" class="btn-sm btn-primary" name="lanjut"><i class="fa fa-check"></i> YA</button> 
                <button class="btn-sm btn-danger" onclick="window.history.go(-1); return false;" name="tidak"><i class="fa fa-remove"></i> TIDAK</button>
            </form>

            
        </div>
    </div>
</div>