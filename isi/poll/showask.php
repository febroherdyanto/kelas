<?php
$getidpol = addslashes($_GET['xid']);

$qcekpoll = mysqli_query($xkon,"select * from p_polling where id_poll=$getidpol");
while($dcekpol = mysqli_fetch_array($qcekpoll)){
    $xjudul = $dcekpol['judul']; ?>


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Daftar Pertanyaan Polling "<?php echo $xjudul; ?>"</h4>
                <p class="card-description">
                </p>
            <a href="index.php?halaman=Lihat-Pertanyaan&xid=<?php echo $getidpol; ?>&addask=true">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i> Tambah Pertanyaan</button>
            </a>
            <div class='table-responsive'>
                <table class="table table-striped" id="tabelku">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>No. Pertanyaan</td>
                            <td>Pertanyaan Polling</td>
                            <td>Detail</td>
                            <td>Jumlah Opsi</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        $qcekt = mysqli_query($xkon, "select * from p_tanya where id_poll=$getidpol order by no_tanya ASC");
                        while($dcekt = mysqli_fetch_array($qcekt)){
                            $xid_tanya = $dcekt['id_tanya'];
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $dcekt['no_tanya']; ?></td>
                            <td><?php echo $dcekt['pertanyaan']; ?></td>
                            <td><?php echo $dcekt['detail']; ?></td>
                            <td><?php
                                $cekjmlopsi = mysqli_query($xkon, "select * from p_opsi where id_tanya=$xid_tanya");
                                $hitung = mysqli_num_rows($cekjmlopsi);
                                echo $hitung;
                                ?>
                            </td>
                            <td>
                                <a href="index.php?halaman=Lihat-Pertanyaan&xid=<?php echo $xid_tanya; ?>&addopt=true">
                                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus-circle"></i> Tambah Pilihan Jabawan</button>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php } ?>


<?php

$getask = addslashes($_GET['addask']);

if($getask == 'true'){
    // ================================= FORM TAMBAH PERTANYAAN MUNCUL =========================== 
?>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fa fa-plus-circle"></i> Tambah Pertanyaan Baru</h4>
            <p class="card-description"> </p>
            <?php
            if(isset($_POST['submit'])){
                $xid = '';
                $xno_tanya = trim(stripslashes(htmlspecialchars(strtoupper($_POST['no_tanya']))));
                $xpertanyaan = trim(stripslashes(htmlspecialchars(strtoupper($_POST['pertanyaan']))));
                $xdetail = trim(stripslashes(htmlspecialchars(strtoupper($_POST['detail']))));

                $qinstanya = "INSERT INTO p_tanya values (NULL, $getidpol, $xno_tanya, '$xpertanyaan', '$xdetail')";
                $xprost = mysqli_query($xkon, $qinstanya);
                if($xprost == TRUE){
                    echo '<div class="col-md-12 stretch-card transparent">
                            <div class="card card-light-info" style="background: #03fc77;">
                                <div class="card-header">
                                    <strong><i class="fa fa-check"></i> SUKSES !</strong> <br> Data berhasil ditambahkan.<br>
                                    Anda akan diarahkan dalam 2 detik...
                                </div>
                            </div>
                        </div>';
                    echo "<script>window.setTimeout(function () {
                        location.href = 'index.php?halaman=Lihat-Pertanyaan&xid=$getidpol';
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

            <form class="col s12" method="post" action="">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No. Pertanyaan</label>
                    <div class="col-sm-9">
                        <input type="text" name="no_tanya" class="form-control" placeholder="Masukkan Nomor Urut Pertanyaan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Pertanyaan</label>
                    <div class="col-sm-9">
                        <input type="text" name="pertanyaan" class="form-control" placeholder="Masukkan Pertanyaan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Keterangan (optional)</label>
                    <div class="col-sm-9">
                        <input type="text" name="detail" class="form-control" placeholder="Masukkan Detail / Clue Pertanyaan" required>
                    </div>
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary mr-2"><i class="fa fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>
</div>

<?php
}elseif ($getask == 'false'){
    // ================================= FORM TAMBAH PERTANYAAN HILANG =========================== 
}else{
    // =========================================== KOSONG ======================================== 
}?>




<?php

$getopt = addslashes($_GET['addopt']);

if($getopt == 'true'){
    // ================================= FORM TAMBAH OPSI JAWABAN MUNCUL =========================== 
?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Daftar Opsi Jawaban Polling "
                    <?php $qcekt = mysqli_query($xkon, "select * from p_tanya where id_tanya=$getidpol");
                        while($dcekt = mysqli_fetch_array($qcekt)){
                            echo $dcekt['pertanyaan'];
                        } ?>
                "</h4>
                <p class="card-description">
                </p>
            <a href="index.php?halaman=Lihat-Pertanyaan&xid=<?php echo $getidpol; ?>&addopt=true&next=true">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i> Tambah Opsi Jawaban</button>
            </a>
            <div class='table-responsive'>
                <table class="table table-striped" id="tabelku">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Opsi Jawaban</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        $qcekt = mysqli_query($xkon, "select * from p_opsi where id_tanya=$getidpol order by id_opsi ASC");
                        while($dcekt = mysqli_fetch_array($qcekt)){
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $dcekt['opsi']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
$getnext= addslashes($_GET['next']);

if($getnext == 'true'){ 
    // ================================= FORM TAMBAH OPSI JAWABAN MUNCUL =========================== 
?>

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fa fa-plus-circle"></i> Tambah Opsi Jawaban Baru</h4>
            <p class="card-description">
                
            </p>
            <?php
            if(isset($_POST['simpanopsi'])){
                $id_opsi = '';
                $xid_tanyaa = $_GET['xid'];
                $xopsi = trim(stripslashes(htmlspecialchars(strtoupper($_POST['opsi']))));

                $qinsop = "INSERT INTO p_opsi (id_opsi, id_tanya, opsi) values (NULL, $xid_tanyaa, '$xopsi')";
                $xprosp = mysqli_query($xkon, $qinsop);
                if($xprosp == TRUE){
                    echo '<div class="col-md-12 stretch-card transparent">
                            <div class="card card-light-info" style="background: #03fc77;">
                                <div class="card-header">
                                    <strong><i class="fa fa-check"></i> SUKSES !</strong> <br> Data berhasil ditambahkan.<br>
                                    Anda akan diarahkan dalam 2 detik...
                                </div>
                            </div>
                        </div>';
                    echo "<script>window.setTimeout(function () {
                        location.href = 'index.php?halaman=Lihat-Pertanyaan&xid=$xid_tanyaa&addopt=true';
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

            <form class="col s12" method="post" action="">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Pilihan Jawaban</label>
                    <div class="col-sm-9">
                        <input type="text" name="opsi" class="form-control" placeholder="Masukkan Opsi Jawaban" required>
                    </div>
                </div>
                
                <button type="submit" name="simpanopsi" class="btn btn-primary mr-2"><i class="fa fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>
</div>

<?php 
}elseif($getnext == 'false'){
    // =========================================== KOSONG ========================================== 
}else{
    // =========================================== KOSONG ========================================== 
}
?>








<?php
}elseif ($getopt == 'false'){
    // ================================= FORM TAMBAH OPSI JAWABAN HILANG =========================== 
}else{
    // =========================================== KOSONG ========================================== 
}?>


