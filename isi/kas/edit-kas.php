<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><i class="fa fa-edit"></i> Edit Total Uang Kas</h4>
                  <p class="card-description"> </p>
                <?php
                    if(isset($_POST['submit'])){
                    $jml = trim(stripslashes(htmlspecialchars(strtoupper($_POST['jk']))));
                    $last = trim(stripslashes(htmlspecialchars(strtoupper($_POST['lu']))));
                    $by = trim(stripslashes(htmlspecialchars($_POST['ub'])));
                    $quee = "update k_kas set jml_kas='$jml', last_update='$last', update_by='$by' where id_kas=1";
                    $xque = mysqli_query($xkon, $quee);
                    if($xque == TRUE){
                        echo '<div class="col-md-12 stretch-card transparent">
                            <div class="card card-light-info" style="background: #03fc77;">
                            <div class="card-header">
                            <strong><i class="fa fa-check"></i> SUKSES !</strong> <br> Uang Kas Berhasil Diperbarui.
                            </div>
                            </div>
                        </div> <br>';
                    }else{
                        echo '<div class="col-md-12 stretch-card transparent">
                            <div class="card card-light-danger">
                            <div class="card-header">
                            <strong><i class="fa fa-exclamation-triangle"></i> GAGAL !</strong> <br> Uang Kas Gagal Diperbarui</div>
                            </div>
                        </div> <br>'.mysqli_error($xkon);
                    }
                    }
                ?>


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


<form class="col s12" method="post" action="">
<?php
    $sel = mysqli_query($xkon, "select * from k_kas where id_kas=1");
    while($xd = mysqli_fetch_array($sel)){
        $jml_kas = $xd['jml_kas'];
        $last_update = $xd['last_update'];
        $update_by = $xd['update_by'];
?>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Jumlah Uang Kas Terkini *</label>
    <div class="col-sm-9">
        <input type="text" name="jk" id="rupiah" class="form-control" value="<?php echo $jml_kas; ?>" placeholder="Jumlah Uang Kas" required>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">NIM</label>
    <div class="col-sm-9">
        <input type="text" id="user_id" name="ub" class="form-control" onkeyup="GetDetail(this.value)" value="<?php echo $update_by; ?>" placeholder="3120xxxx" required>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
        <div class="col-sm-9">
            <input type="text" id="nama_lengkap" name="nama" class="form-control" placeholder="Form akan terisi otomatis" readonly required>
        </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Terakhir Diperbarui</label>
    <div class="col-sm-9">
        <input type="text" name="tgl" class="form-control" placeholder="" value="<?php echo date("d F Y", strtotime($xd['last_update'])); ?>" readonly >
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Tanggal Diperbarui</label>
    <div class="col-sm-9">
        <input type="date" name="lu" class="form-control" placeholder="" value="<?php echo date("Y-m-d"); ?>" readonly required>
    </div>
</div>

<button type="submit" name="submit" class="btn btn-primary mr-2"><i class="fa fa-save"></i> Simpan</button>


<?php } ?>
  </form>
</div>



      </div>
  </body>
</html>
