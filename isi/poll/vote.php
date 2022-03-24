<?php
$xidpol = addslashes($_GET['xid']);

$qcekpol = mysqli_query($xkon, "select * from p_polling where id_poll=$xidpol");
while($dpol = mysqli_fetch_array($qcekpol)){

?>

                      <!-- CEK NIM -->
                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                      <script>
                        function GetDetail(str) {
                            if (str.length == 0) {
                                document.getElementById("nama_lengkap").value = "";
                                return;
                            }
                            else {
                                var xmlhttp = new XMLHttpRequest();
                                xmlhttp.onreadystatechange = function () {
                                    if (this.readyState == 4 && 
                                            this.status == 200) {
                                        
                                        var myObj = JSON.parse(this.responseText);
                                        document.getElementById
                                            ("nama_lengkap").value = myObj[0];
                                            
                                    }
                                };

                                xmlhttp.open("GET", "ajax.php?user_id=" + str, true);
                                    
                                xmlhttp.send();
                            }
                        }
                        </script>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">POLLING <?php echo $dpol['judul']; ?></h4>
                <p class="card-description">
                </p>

                <?php
            if(isset($_POST['save'])){
                $nim = trim(stripslashes(htmlspecialchars(strtoupper($_POST['nim']))));
                $id_tanya = trim(stripslashes(htmlspecialchars(strtoupper($_POST['id_tanya']))));
                $option = trim(stripslashes(htmlspecialchars(strtoupper($_POST['option']))));
                $detail = trim(stripslashes(htmlspecialchars(strtoupper($_POST['detail']))));

                $cekidmhs = mysqli_query($xkon, "select id_mhs, nama_lengkap from mahasiswa where nim=$nim");
                $cekmhs = mysqli_fetch_assoc($cekidmhs);
                    $idmhs = $cekmhs['id_mhs'];

                $qvote = "INSERT INTO p_jawaban (id_mhs, id_poll, id_opsi, detail) values ($idmhs, $xidpol, $option, '$detail')";
                $xprost = mysqli_query($xkon, $qvote);
                if($xprost == TRUE){
                    echo '<div class="col-md-12 stretch-card transparent">
                            <div class="card card-light-info" style="background: #03fc77;">
                                <div class="card-header">
                                    <strong><i class="fa fa-check"></i> SUKSES !</strong> <br> Terima kasih telah melakukan polling.<br>
                                    Anda akan diarahkan dalam 2 detik...
                                </div>
                            </div>
                        </div>';
                    echo "<script>window.setTimeout(function () {
                        location.href = 'index.php?halaman=Pollings';
                        }, 2000);</script>";
                }else{
                    echo '<div class="col-md-12 stretch-card transparent">
                            <div class="card card-light-danger">
                                <div class="card-header">
                                    <strong><i class="fa fa-exclamation-triangle"></i> GAGAL !</strong> <br> Data gagal ditambahkan
                                </div>
                            </div>
                        </div>'.mysqli_error($xkon);
                }
            }?>

            <form method="post" action="">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-5">
                        <input type="text" id="user_id" name="nim" class="form-control" onkeyup="GetDetail(this.value)" placeholder="3120xxxx" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-5">
                        <input type="text" id="nama_lengkap" name="nama" class="form-control" placeholder="Form akan terisi otomatis" readonly required>
                    </div>
                </div>
                <?php
                $cektanya = mysqli_query($xkon, "select * from p_tanya where id_poll=$xidpol order by no_tanya ASC");
                while($tanya = mysqli_fetch_array($cektanya)){ 
                    $idtanya = $tanya['id_tanya'];?>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pertanyaan #<?php echo $tanya['no_tanya']; ?></label>
                    <div class="col-sm-5">
                        <b><?php echo $tanya['pertanyaan']; ?></b>
                        <input type="text" name="id_tanya" value="<?php echo $idtanya; ?>" hidden>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5">
                        <?php
                        $cekopt = mysqli_query($xkon, "select * from p_opsi where id_tanya=$idtanya order by opsi ASC");
                        while($opsi = mysqli_fetch_array($cekopt)){ 
                            $idopt = $opsi['id_opsi']; ?>
                            <input type="radio" name="option" id="opt_<?php echo $idopt; ?>" value="<?php echo $idopt; ?>">
                                <label for="opt_<?php echo $idopt; ?>"><?php echo $opsi['opsi']; ?></label> <br>
                        <?php } ?>
                    </div>
                </div>
                <?php } /*Penutup Pertanyaan*/ ?>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Saran / Keterangan</label>
                    <div class="col-sm-5">
                        <textarea name="detail" class="form-control" placeholder="Isikan saran atau keterangan yang Anda inginkan"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <button type="submit" name="save" class="btn btn-primary mr-2"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>