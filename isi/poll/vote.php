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
            <form method="post" action="">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">NIM</label>
                    <div class="col-sm-9">
                        <input type="text" id="user_id" name="nim" class="form-control" onkeyup="GetDetail(this.value)" placeholder="3120xxxx" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-9">
                        <input type="text" id="nama_lengkap" name="nama" class="form-control" placeholder="Form akan terisi otomatis" readonly required>
                    </div>
                </div>
                <?php
                    $cektanya = mysqli_query($xkon, "select * from p_tanya where id_poll=$xidpol");
                    
                ?>
            </form>
        </div>
    </div>
</div>
<?php } ?>