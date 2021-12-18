<?php 
$slevel = $_SESSION['level'];
?>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Password</h4>
                <p class="card-description">
                    <?php
                        if(isset($_POST['submit'])){
                            $password = trim(addslashes(htmlspecialchars("px".md5("xpass-".$_POST['xpassword']))));
                            $query = mysqli_query($xkon, "update xuser set password='$password' where level='$slevel' ");

                            if($query == True){
                                echo    '<div class="col-md-12 stretch-card transparent">
                                            <div class="card card-light-info" style="background: #03fc77;">
                                                <div class="card-header">
                                                    <strong><i class="fa fa-check"></i> SUKSES !</strong> <br> Password berhasil diubah.<br>
                                                    Anda akan otomatis Logout, setelah 3 Detik. Mohon Tunggu...
                                                </div>
                                            </div>
                                        </div>';
                                echo "<script>window.setTimeout(function () {
                                        location.href = 'xlogout.php';
                                    }, 3000);</script>";
                            }else{
                                echo '<div class="col-md-12 stretch-card transparent">
                                            <div class="card card-light-danger">
                                                <div class="card-header">
                                                    <strong><i class="fa fa-exclamation-triangle"></i> GAGAL !</strong> <br> Data gagal ditambahkan
                                                </div>
                                            </div>
                                        </div>'.mysqli_error($xkon);
                            }
                        }
                    ?>
                </p>
                
            <form class="col s12" method="post" action="">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" name="xpassword" class="form-control" placeholder="Password" id="myInput" required>
                        <input type="checkbox" onclick="myFunction()">Show Password
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mr-2">Simpan <i class="fa fa-arrow-right"></i> </button>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    }
</script>