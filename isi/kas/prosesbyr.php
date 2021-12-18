<?php
$xid_tahun = stripslashes(htmlspecialchars($_GET['tahun']));
$xnim = stripslashes(htmlspecialchars($_GET['nim']));

$ceknim = mysqli_query($xkon, "select id_mhs, nim, nama_lengkap from mahasiswa where nim=$xnim");
while($qceknim = mysqli_fetch_array($ceknim)){
    $cek_idmhs = $qceknim['id_mhs'];
    $cek_namalengkap = $qceknim['nama_lengkap'];
?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="text-align: center;"></h4>
                <p class="card-description">
                <?php
if(isset($_POST['submit'])){
    $k_1 = $_POST['k_1'];
    $k_2 = $_POST['k_2'];
    $k_3 = $_POST['k_3'];
    $k_4 = $_POST['k_4'];
    $k_5 = $_POST['k_5'];
    $k_6 = $_POST['k_6'];
    $k_7 = $_POST['k_7'];
    $k_8 = $_POST['k_8'];
    $k_9 = $_POST['k_9'];
    $k_10 = $_POST['k_10'];
    $k_11 = $_POST['k_11'];
    $k_12 = $_POST['k_12'];
    $id_detail = $_POST['id_detail'];
    
$qiniput = mysqli_query($xkon, "update k_detail set k_1='$k_1', k_2='$k_2', k_3='$k_3', k_4='$k_4', k_5='$k_5', k_6='$k_6', k_7='$k_7', k_8='$k_8', k_9='$k_9', k_10='$k_10', k_11='$k_11', k_12='$k_12' where id_detail=$id_detail");

if($qiniput == TRUE){
    echo '<div class="col-md-12 stretch-card transparent">
        <div class="card card-light-info" style="background: #03fc77;">
        <div class="card-header">
        <strong><i class="fa fa-check"></i> SUKSES !</strong> <br> Silahkan Lakukan Pembayaran.<br>
            <a href="index.php?halaman=Upload-Bayar&xid='.$id_detail.'"><button class="btn btn-success mr-2"><i class="fa fa-upload"></i> Klik Disini untuk Lakukan Pembayaran</button></a>
        </div>
        </div>
    </div> <br>';
}else{
    echo '<div class="col-md-12 stretch-card transparent">
        <div class="card card-light-danger">
        <div class="card-header">
        <strong><i class="fa fa-exclamation-triangle"></i> GAGAL !</strong> <br> Proses gagal diperbarui</div>
        </div>
    </div> <br>'.mysqli_error($xkon);
}

}
?>
                </p>


<div class="row">
    <div class="col-md-12 mb-4 stretch-card transparent">
        <div class="card card-tale">
            <div class="card-body">
                <p class="fs-30 mb-2" style="text-align: center"><b>Proses Pembayaran Uang Kas</b></p>
                <p class="mb-2">
                    NIM : <?php echo $xnim; ?> <br>
                    Nama Mahasiswa : <?php echo $cek_namalengkap; ?> <br>
                    Tahun : <?php $cektahun = mysqli_query($xkon, "select * from k_tahun where id_tahun=$xid_tahun");
                    while($qtahun = mysqli_fetch_array($cektahun)){ echo $qtahun['nm_tahun']; }
                    ?>
                </p>
                <hr>
                <h5><i class="fa fa-warning"></i> ALUR PEMBAYARAN KAS : </h5> 
                <p>
                    <ul>
                        <li>Jika dikolom tertera : " &#10003 " , Anda sudah melakukan Pembayaran Uang Kas</li>
                        <li> Keterangan N adalah Anda belum melakukan pembayaran uang kas </li>
                        <li> Keterangan P adalah Proses pembayaran Anda sedang divalidasi oleh Bendahara Kelas </li>
                        <li> <b>Proses Pembayaran : </b> 
                            <ol>
                                <li>Mahasiswa melakukan update pada bulan yang akan dibayar dengan mengubah pilihan ke <b>" P "</b> </li>
                                <li> Kemudian Klik Simpan </li>
                                <li> Setelah Proses Simpan berhasil, Silahkan lakukan pembayaran dengan <i>Scan QRIS</i> menggunakan Aplikasi Dompet Digital atau Mobile Banking Anda sesuai nominal bulan yang Anda pilih. 
                                <?php $qr = mysqli_query($xkon, "select * from k_detail where id_mhs=$cek_idmhs and id_tahun=$xid_tahun"); 
                                while($qrr = mysqli_fetch_array($qr)){ ?>
                                <a href="index.php?halaman=Upload-Bayar&xid=<?php echo $qrr['id_detail']; ?>"><button class="btn btn-success mr-2"><i class="fa fa-upload"></i> Klik Disini untuk Lakukan Pembayaran</button></a>
                                <?php } ?>
                                </li>
                                <li> Upload Bukti Pembayaran pada link yang telah disediakan</li>
                            </ol>
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</div>


<div class="table-responsive">
    <table class="table table-striped table-bordered" id="tabelku">
        <thead>
            <tr style="text-align: center;">
                <th rowspan="2">No.</th>
                <th rowspan="2">NIM</th>
                <th rowspan="2">Nama Mahasiswa</th>
                <th colspan="12">Bulan</th>
                <th rowspan="2">Aksi</th>
            </tr>
            <tr style="text-align: center;">
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $result = mysqli_query($xkon, "select * from k_detail where id_mhs=$cek_idmhs and id_tahun=$xid_tahun"); 
                $no = 0;
                while($row = mysqli_fetch_array($result)) { 
                    $no++; 
                    $id_mhs = $row["id_mhs"];
                    ?>
            <tr>
                <td style="text-align: center;"><?php echo $no; ?></td>
                <td style="text-align: center;"><?php echo $xnim; ?></td>
                <td><?php echo $cek_namalengkap;  ?></td>

                <form action="" method="post">
                        <input type="text" name="id_detail" value="<?php echo $row['id_detail']; ?>" hidden>
                <td style="text-align: center;">
                    <?php if($row['k_1'] == 'Y'){ ?>
                        <input type="text" name="k_1" value="Y" hidden>
                        &#10003
                    <?php }elseif($row['k_1'] == 'P'){ ?>
                        <input type="radio" name="k_1" value="P" checked> P <br>
                        <input type="radio" name="k_1" value="N"> N
                    <?php }else{ ?>
                        <input type="radio" name="k_1" value="P"> P <br>
                        <input type="radio" name="k_1" value="N" checked> N
                    <?php } ?>
                </td>

                <td style="text-align: center;">
                    <?php if($row['k_2'] == 'Y'){ ?>
                        <input type="text" name="k_2" value="Y" hidden>
                        &#10003
                    <?php }elseif($row['k_2'] == 'P'){ ?>
                        <input type="radio" name="k_2" value="P" checked> P <br>
                        <input type="radio" name="k_2" value="N"> N
                    <?php }else{ ?>
                        <input type="radio" name="k_2" value="P"> P <br>
                        <input type="radio" name="k_2" value="N" checked> N
                    <?php } ?>
                </td>
                
                <td style="text-align: center;">
                    <?php if($row['k_3'] == 'Y'){ ?>
                        <input type="text" name="k_3" value="Y" hidden>
                        &#10003
                    <?php }elseif($row['k_3'] == 'P'){ ?>
                        <input type="radio" name="k_3" value="P" checked> P <br>
                        <input type="radio" name="k_3" value="N"> N
                    <?php }else{ ?>
                        <input type="radio" name="k_3" value="P"> P <br>
                        <input type="radio" name="k_3" value="N" checked> N
                    <?php } ?>
                </td>

                <td style="text-align: center;">
                    <?php if($row['k_4'] == 'Y'){ ?>
                        <input type="text" name="k_4" value="Y" hidden>
                        &#10003
                    <?php }elseif($row['k_4'] == 'P'){ ?>
                        <input type="radio" name="k_4" value="P" checked> P <br>
                        <input type="radio" name="k_4" value="N"> N
                    <?php }else{ ?>
                        <input type="radio" name="k_4" value="P"> P <br>
                        <input type="radio" name="k_4" value="N" checked> N
                    <?php } ?>
                </td>

                <td style="text-align: center;">
                    <?php if($row['k_5'] == 'Y'){ ?>
                        <input type="text" name="k_5" value="Y" hidden>
                        &#10003
                    <?php }elseif($row['k_5'] == 'P'){ ?>
                        <input type="radio" name="k_5" value="P" checked> P <br>
                        <input type="radio" name="k_5" value="N"> N
                    <?php }else{ ?>
                        <input type="radio" name="k_5" value="P"> P <br>
                        <input type="radio" name="k_5" value="N" checked> N
                    <?php } ?>
                </td>

                <td style="text-align: center;">
                    <?php if($row['k_6'] == 'Y'){ ?>
                        <input type="text" name="k_6" value="Y" hidden>
                        &#10003
                    <?php }elseif($row['k_6'] == 'P'){ ?>
                        <input type="radio" name="k_6" value="P" checked> P <br>
                        <input type="radio" name="k_6" value="N"> N
                    <?php }else{ ?>
                        <input type="radio" name="k_6" value="P"> P <br>
                        <input type="radio" name="k_6" value="N" checked> N
                    <?php } ?>
                </td>

                <td style="text-align: center;">
                    <?php if($row['k_7'] == 'Y'){ ?>
                        <input type="text" name="k_7" value="Y" hidden>
                        &#10003
                    <?php }elseif($row['k_7'] == 'P'){ ?>
                        <input type="radio" name="k_7" value="P" checked> P <br>
                        <input type="radio" name="k_7" value="N"> N
                    <?php }else{ ?>
                        <input type="radio" name="k_7" value="P"> P <br>
                        <input type="radio" name="k_7" value="N" checked> N
                    <?php } ?>
                </td>

                <td style="text-align: center;">
                    <?php if($row['k_8'] == 'Y'){ ?>
                        <input type="text" name="k_8" value="Y" hidden>
                        &#10003
                    <?php }elseif($row['k_8'] == 'P'){ ?>
                        <input type="radio" name="k_8" value="P" checked> P <br>
                        <input type="radio" name="k_8" value="N"> N
                    <?php }else{ ?>
                        <input type="radio" name="k_8" value="P"> P <br>
                        <input type="radio" name="k_8" value="N" checked> N
                    <?php } ?>
                </td>

                <td style="text-align: center;">
                    <?php if($row['k_9'] == 'Y'){ ?>
                        <input type="text" name="k_9" value="Y" hidden>
                        &#10003
                    <?php }elseif($row['k_9'] == 'P'){ ?>
                        <input type="radio" name="k_9" value="P" checked> P <br>
                        <input type="radio" name="k_9" value="N"> N
                    <?php }else{ ?>
                        <input type="radio" name="k_9" value="P"> P <br>
                        <input type="radio" name="k_9" value="N" checked> N
                    <?php } ?>
                </td>

                <td style="text-align: center;">
                    <?php if($row['k_10'] == 'Y'){ ?>
                        <input type="text" name="k_10" value="Y" hidden>
                        &#10003
                    <?php }elseif($row['k_10'] == 'P'){ ?>
                        <input type="radio" name="k_10" value="P" checked> P <br>
                        <input type="radio" name="k_10" value="N"> N
                    <?php }else{ ?>
                        <input type="radio" name="k_10" value="P"> P <br>
                        <input type="radio" name="k_10" value="N" checked> N
                    <?php } ?>
                </td>

                <td style="text-align: center;">
                    <?php if($row['k_11'] == 'Y'){ ?>
                        <input type="text" name="k_11" value="Y" hidden>
                        &#10003
                    <?php }elseif($row['k_11'] == 'P'){ ?>
                        <input type="radio" name="k_11" value="P" checked> P <br>
                        <input type="radio" name="k_11" value="N"> N
                    <?php }else{ ?>
                        <input type="radio" name="k_11" value="P"> P <br>
                        <input type="radio" name="k_11" value="N" checked> N
                    <?php } ?>
                </td>

                <td style="text-align: center;">
                    <?php if($row['k_12'] == 'Y'){ ?>
                        <input type="text" name="k_12" value="Y" hidden>
                        &#10003
                    <?php }elseif($row['k_12'] == 'P'){ ?>
                        <input type="radio" name="k_12" value="P" checked> P <br>
                        <input type="radio" name="k_12" value="N"> N
                    <?php }else{ ?>
                        <input type="radio" name="k_12" value="P"> P <br>
                        <input type="radio" name="k_12" value="N" checked> N
                    <?php } ?>
                </td>

                <td style="text-align: center;">
                    <button type="submit" name="submit" class="btn btn-primary mr-2"><i class="fa fa-save"></i> Simpan</button>
                </td>
            </tr>
            <?php  } mysqli_close($xkon); ?>
        </tbody>
    </table>
</div>
<?php } ?>





</div>
    </div>
</div>