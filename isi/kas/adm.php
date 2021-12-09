<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Data Kas Berdasarkan Upload File</h4>
                <p class="card-description">
                </p>
            <?php
                $xid_upload = $_GET['id_upload'];
                $xid_detail = $_GET['id_detail'];

                $cekfile = mysqli_query($xkon, "select * from k_upload where id_upload=$xid_upload");
                while($cf = mysqli_fetch_array($cekfile)){
                    $xfile = $cf['file'];
            ?>
                <div class="col-lg-12" style="text-align: center">
                    <img src="isi/kas/XFILES/<?php echo $xfile; ?>" style="width:100%; height:100%; border-radius:0; max-height:500px; max-width:300px">
                    &nbsp;&nbsp;&nbsp;<a href="isi/kas/XFILES/<?php echo $xfile; ?>" target="_blank"><button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-download"></i> Download File</button></a>
                </div>

                <div class="col-lg-12">
                    <hr>
                    <?php 
                                                if(isset($_POST['simpan'])){
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
                                                    $ustatus = $_POST['close'];
                                                    
                        $qiniput = mysqli_query($xkon, "update k_detail set k_1='$k_1', k_2='$k_2', k_3='$k_3', k_4='$k_4', k_5='$k_5', k_6='$k_6', k_7='$k_7', k_8='$k_8', k_9='$k_9', k_10='$k_10', k_11='$k_11', k_12='$k_12' where id_detail=$id_detail");
                        $uquery = mysqli_query($xkon, "update k_upload set status='$ustatus' where id_upload=$xid_upload");

                        if(($qiniput == TRUE) AND ($uquery == True)){ ?>
                            <div class="col-md-12 stretch-card transparent">
                                <div class="card card-light-info" style="background: #03fc77;">
                                    <div class="card-header">
                                        <strong><i class="fa fa-check"></i> SUKSES !</strong> <br>Data berhasil Diperbarui.<hr>
                                        
                                                    <script>
                                                        alert("Terima Kasih! Status telah diperbarui");
                                                        window.location = "index.php?halaman=Cek-Upload";
                                                    </script>
                                    </div>
                                </div>
                            </div>
                        <?php }else{
                            echo '<div class="col-md-12 stretch-card transparent">
                            <div class="card card-light-danger">
                              <div class="card-header">
                              <strong><i class="fa fa-exclamation-triangle"></i> Gagal !</strong> <br>Data gagal diinput.
                              </div>
                            </div>
                          </div>'.mysqli_error($xkon);
                                                    }
                                                }
                                            ?>
                <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="tabelku">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th rowspan="2">No.</th>
                                        <th rowspan="2">NIM</th>
                                        <th rowspan="2">Nama Mahasiswa</th>
                                        <th colspan="12">Bulan</th>
                                        <th rowspan="2">Status File</th>
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
                                        $result = mysqli_query($xkon, "select * from k_detail where id_detail=$xid_detail"); 
                                        $no = 0;
                                        while($row = mysqli_fetch_array($result)) { 
                                            $no++; 
                                            $id_mhs = $row["id_mhs"];
                                            ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $no; ?></td>
                                        <?php 
                                            $cekmhs = mysqli_query($xkon, "select nim, nama_lengkap from mahasiswa where id_mhs=$id_mhs");
                                            while($fetch = mysqli_fetch_array($cekmhs)){
                                                $nim = $fetch['nim'];
                                                $nama_lengkap = $fetch['nama_lengkap'];
                                        ?>
                                        <td style="text-align: center;"><?php echo $nim; ?></td>
                                        <td><?php echo $nama_lengkap;  ?></td>
                                        
                                        <form action="" method="post">
                                                <input type="text" name="id_detail" value="<?php echo $row['id_detail']; ?>" hidden>
                                        <td style="text-align: center;">
                                            <?php if($row['k_1'] == 'Y'){ ?>
                                                <input type="radio" name="k_1" value="Y" checked> Y &#10003<br>
                                                <input type="radio" name="k_1" value="P"> P <br>
                                                <input type="radio" name="k_1" value="N"> N
                                            <?php }elseif($row['k_1'] == 'P'){ ?>
                                                <input type="radio" name="k_1" value="Y"> Y <br>
                                                <input type="radio" name="k_1" value="P" checked> P <br>
                                                <input type="radio" name="k_1" value="N"> N
                                            <?php }else{ ?>
                                                <input type="radio" name="k_1" value="Y"> Y <br>
                                                <input type="radio" name="k_1" value="P"> P <br>
                                                <input type="radio" name="k_1" value="N" checked> N
                                            <?php } ?>
                                        </td>

                                        <td style="text-align: center;">
                                            <?php if($row['k_2'] == 'Y'){ ?>
                                                <input type="radio" name="k_2" value="Y" checked> Y &#10003<br>
                                                <input type="radio" name="k_2" value="P"> P <br>
                                                <input type="radio" name="k_2" value="N"> N
                                            <?php }elseif($row['k_2'] == 'P'){ ?>
                                                <input type="radio" name="k_2" value="Y"> Y <br>
                                                <input type="radio" name="k_2" value="P" checked> P <br>
                                                <input type="radio" name="k_2" value="N"> N
                                            <?php }else{ ?>
                                                <input type="radio" name="k_2" value="Y"> Y <br>
                                                <input type="radio" name="k_2" value="P"> P <br>
                                                <input type="radio" name="k_2" value="N" checked> N
                                            <?php } ?>
                                        </td>
                                        
                                        <td style="text-align: center;">
                                            <?php if($row['k_3'] == 'Y'){ ?>
                                                <input type="radio" name="k_3" value="Y" checked> Y &#10003<br>
                                                <input type="radio" name="k_3" value="P"> P <br>
                                                <input type="radio" name="k_3" value="N"> N
                                            <?php }elseif($row['k_3'] == 'P'){ ?>
                                                <input type="radio" name="k_3" value="Y"> Y <br>
                                                <input type="radio" name="k_3" value="P" checked> P <br>
                                                <input type="radio" name="k_3" value="N"> N
                                            <?php }else{ ?>
                                                <input type="radio" name="k_3" value="Y"> Y <br>
                                                <input type="radio" name="k_3" value="P"> P <br>
                                                <input type="radio" name="k_3" value="N" checked> N
                                            <?php } ?>
                                        </td>

                                        <td style="text-align: center;">
                                            <?php if($row['k_4'] == 'Y'){ ?>
                                                <input type="radio" name="k_4" value="Y" checked> Y &#10003<br>
                                                <input type="radio" name="k_4" value="P"> P <br>
                                                <input type="radio" name="k_4" value="N"> N
                                            <?php }elseif($row['k_4'] == 'P'){ ?>
                                                <input type="radio" name="k_4" value="Y"> Y <br>
                                                <input type="radio" name="k_4" value="P" checked> P <br>
                                                <input type="radio" name="k_4" value="N"> N
                                            <?php }else{ ?>
                                                <input type="radio" name="k_4" value="Y"> Y <br>
                                                <input type="radio" name="k_4" value="P"> P <br>
                                                <input type="radio" name="k_4" value="N" checked> N
                                            <?php } ?>
                                        </td>

                                        <td style="text-align: center;">
                                            <?php if($row['k_5'] == 'Y'){ ?>
                                                <input type="radio" name="k_5" value="Y" checked> Y &#10003<br>
                                                <input type="radio" name="k_5" value="P"> P <br>
                                                <input type="radio" name="k_5" value="N"> N
                                            <?php }elseif($row['k_5'] == 'P'){ ?>
                                                <input type="radio" name="k_5" value="Y"> Y <br>
                                                <input type="radio" name="k_5" value="P" checked> P <br>
                                                <input type="radio" name="k_5" value="N"> N
                                            <?php }else{ ?>
                                                <input type="radio" name="k_5" value="Y"> Y <br>
                                                <input type="radio" name="k_5" value="P"> P <br>
                                                <input type="radio" name="k_5" value="N" checked> N
                                            <?php } ?>
                                        </td>

                                        <td style="text-align: center;">
                                            <?php if($row['k_6'] == 'Y'){ ?>
                                                <input type="radio" name="k_6" value="Y" checked> Y &#10003<br>
                                                <input type="radio" name="k_6" value="P"> P <br>
                                                <input type="radio" name="k_6" value="N"> N
                                            <?php }elseif($row['k_6'] == 'P'){ ?>
                                                <input type="radio" name="k_6" value="Y"> Y <br>
                                                <input type="radio" name="k_6" value="P" checked> P <br>
                                                <input type="radio" name="k_6" value="N"> N
                                            <?php }else{ ?>
                                                <input type="radio" name="k_6" value="Y"> Y <br>
                                                <input type="radio" name="k_6" value="P"> P <br>
                                                <input type="radio" name="k_6" value="N" checked> N
                                            <?php } ?>
                                        </td>

                                        <td style="text-align: center;">
                                            <?php if($row['k_7'] == 'Y'){ ?>
                                                <input type="radio" name="k_7" value="Y" checked> Y &#10003<br>
                                                <input type="radio" name="k_7" value="P"> P <br>
                                                <input type="radio" name="k_7" value="N"> N
                                            <?php }elseif($row['k_7'] == 'P'){ ?>
                                                <input type="radio" name="k_7" value="Y"> Y <br>
                                                <input type="radio" name="k_7" value="P" checked> P <br>
                                                <input type="radio" name="k_7" value="N"> N
                                            <?php }else{ ?>
                                                <input type="radio" name="k_7" value="Y"> Y <br>
                                                <input type="radio" name="k_7" value="P"> P <br>
                                                <input type="radio" name="k_7" value="N" checked> N
                                            <?php } ?>
                                        </td>

                                        <td style="text-align: center;">
                                            <?php if($row['k_8'] == 'Y'){ ?>
                                                <input type="radio" name="k_8" value="Y" checked> Y &#10003<br>
                                                <input type="radio" name="k_8" value="P"> P <br>
                                                <input type="radio" name="k_8" value="N"> N
                                            <?php }elseif($row['k_8'] == 'P'){ ?>
                                                <input type="radio" name="k_8" value="Y"> Y <br>
                                                <input type="radio" name="k_8" value="P" checked> P <br>
                                                <input type="radio" name="k_8" value="N"> N
                                            <?php }else{ ?>
                                                <input type="radio" name="k_8" value="Y"> Y <br>
                                                <input type="radio" name="k_8" value="P"> P <br>
                                                <input type="radio" name="k_8" value="N" checked> N
                                            <?php } ?>
                                        </td>

                                        <td style="text-align: center;">
                                            <?php if($row['k_9'] == 'Y'){ ?>
                                                <input type="radio" name="k_9" value="Y" checked> Y &#10003<br>
                                                <input type="radio" name="k_9" value="P"> P <br>
                                                <input type="radio" name="k_9" value="N"> N
                                            <?php }elseif($row['k_9'] == 'P'){ ?>
                                                <input type="radio" name="k_9" value="Y"> Y <br>
                                                <input type="radio" name="k_9" value="P" checked> P <br>
                                                <input type="radio" name="k_9" value="N"> N
                                            <?php }else{ ?>
                                                <input type="radio" name="k_9" value="Y"> Y <br>
                                                <input type="radio" name="k_9" value="P"> P <br>
                                                <input type="radio" name="k_9" value="N" checked> N
                                            <?php } ?>
                                        </td>

                                        <td style="text-align: center;">
                                            <?php if($row['k_10'] == 'Y'){ ?>
                                                <input type="radio" name="k_10" value="Y" checked> Y &#10003<br>
                                                <input type="radio" name="k_10" value="P"> P <br>
                                                <input type="radio" name="k_10" value="N"> N
                                            <?php }elseif($row['k_10'] == 'P'){ ?>
                                                <input type="radio" name="k_10" value="Y"> Y <br>
                                                <input type="radio" name="k_10" value="P" checked> P <br>
                                                <input type="radio" name="k_10" value="N"> N
                                            <?php }else{ ?>
                                                <input type="radio" name="k_10" value="Y"> Y <br>
                                                <input type="radio" name="k_10" value="P"> P <br>
                                                <input type="radio" name="k_10" value="N" checked> N
                                            <?php } ?>
                                        </td>

                                        <td style="text-align: center;">
                                            <?php if($row['k_11'] == 'Y'){ ?>
                                                <input type="radio" name="k_11" value="Y" checked> Y &#1000submit3<br>
                                                <input type="radio" name="k_11" value="P"> P <br>
                                                <input type="radio" name="k_11" value="N"> N
                                            <?php }elseif($row['k_11'] == 'P'){ ?>
                                                <input type="radio" name="k_11" value="Y"> Y <br>
                                                <input type="radio" name="k_11" value="P" checked> P <br>
                                                <input type="radio" name="k_11" value="N"> N
                                            <?php }else{ ?>
                                                <input type="radio" name="k_11" value="Y"> Y <br>
                                                <input type="radio" name="k_11" value="P"> P <br>
                                                <input type="radio" name="k_11" value="N" checked> N
                                            <?php } ?>
                                        </td>

                                        <td style="text-align: center;">
                                            <?php if($row['k_12'] == 'Y'){ ?>
                                                <input type="radio" name="k_12" value="Y" checked> Y &#10003<br>
                                                <input type="radio" name="k_12" value="P"> P <br>
                                                <input type="radio" name="k_12" value="N"> N
                                            <?php }elseif($row['k_12'] == 'P'){ ?>
                                                <input type="radio" name="k_12" value="Y"> Y <br>
                                                <input type="radio" name="k_12" value="P" checked> P <br>
                                                <input type="radio" name="k_12" value="N"> N
                                            <?php }else{ ?>
                                                <input type="radio" name="k_12" value="Y"> Y <br>
                                                <input type="radio" name="k_12" value="P"> P <br>
                                                <input type="radio" name="k_12" value="N" checked> N
                                            <?php } ?>
                                        </td>

                                        <td style="">
                                            <input type="radio" value="Y" name="close" checked> Tutup<br>
                                            <input type="radio" value="N" name="close"> Tidak<br>
                                        </td>
                                        <td style="text-align: center;">
                                            <button type="submit" name="simpan" class="btn btn-success mr-2"><i class="fa fa-save"></i> Simpan</button>
                                        </td>
                                            </form>
                                            

                                    </tr>
                                    <?php } } mysqli_close($xkon); ?>
                                </tbody>
                            </table>
                        </div>
                </div>

            <?php } ?>
        </div>
    </div>
</div>