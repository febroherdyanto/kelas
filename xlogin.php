<?php 
session_start();

if(isset($_POST['submit'])){
    $xusername = trim(addslashes(htmlspecialchars($_POST['xusername'])));
    $xpassword = trim(addslashes(htmlspecialchars("px".md5("xpass-".$_POST['xpassword']))));

    $querycek = mysqli_query($xkon, "select * from xuser where username='$xusername' and password='$xpassword' ");
    $cek = mysqli_num_rows($querycek);

    if($cek > 0){
        $data = mysqli_fetch_assoc($querycek);
            $cekmhs = mysqli_query($xkon, "select id_mhs, nim, nama_lengkap from mahasiswa where id_mhs=$data[id_mhs] ");
            while($mhs = mysqli_fetch_array($cekmhs)){
                $nim = $mhs['nim'];
                $nama_lengkap = $mhs['nama_lengkap'];

                if($data['level']=="admin"){
                    $_SESSION['username'] = $xusername;
                    $_SESSION['nim'] = $nim;
                    $_SESSION['nama_lengkap'] = $nama_lengkap;
                    $_SESSION['level'] = "admin";
                    header("location:index.php");

                }else if($data['level'] == "ketua"){
                    $_SESSION['username'] = $xusername;
                    $_SESSION['nim'] = $nim;
                    $_SESSION['nama_lengkap'] = $nama_lengkap;
                    $_SESSION['level'] = "ketua";
                    header("location:index.php");

                }else if($data['level'] == "wakil"){
                    $_SESSION['username'] = $xusername;
                    $_SESSION['nim'] = $nim;
                    $_SESSION['nama_lengkap'] = $nama_lengkap;
                    $_SESSION['level'] = "wakil";
                    header("location:index.php");
                    
                }else if($data['level'] == "sekretaris"){
                    $_SESSION['username'] = $xusername;
                    $_SESSION['nim'] = $nim;
                    $_SESSION['nama_lengkap'] = $nama_lengkap;
                    $_SESSION['level'] = "sekretaris";
                    header("location:index.php");

                }else if($data['level'] == "bendahara"){
                    $_SESSION['username'] = $xusername;
                    $_SESSION['nim'] = $nim;
                    $_SESSION['nama_lengkap'] = $nama_lengkap;
                    $_SESSION['level'] = "sekretaris";
                    header("location:index.php");

                }else{
                    echo    '<div class="col-md-12 stretch-card transparent">
                                <div class="card card-light-danger">
                                    <div class="card-header">
                                        <strong><i class="fa fa-exclamation-triangle"></i> GAGAL LOGIN !</strong> <br> Pastikan Username dan Password Benar
                                    </div>
                                </div>
                            </div>'.mysqli_error($xkon);
                }
            }
    }else{
        echo    '<div class="col-md-12 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-header">
                            <strong><i class="fa fa-exclamation-triangle"></i> GAGAL LOGIN !</strong> <br> Pastikan Username dan Password Benar
                        </div>
                    </div>
                </div>'.mysqli_error($xkon);
    }
}

?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Halaman Login BPH</h4>
                <p class="card-description">
                </p>
            <form class="col s12" method="post" action="">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" name="xusername" id="rupiah" class="form-control" value="" placeholder="Masukkan NIM" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" name="xpassword" class="form-control" placeholder="Password" required>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mr-2">Login <i class="fa fa-arrow-right"></i> </button>
            </form>
        </div>
    </div>
</div>

