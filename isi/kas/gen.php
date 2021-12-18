<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Generate Data Uang Kas</h4>
                <p class="card-description">
                </p>
                <?php 

                $qtahun = mysqli_query($xkon, "select * from k_tahun");
                while($qth = mysqli_fetch_array($qtahun)){
                    echo '<a href="index.php?halaman=Generate-Kas&tahun='.$qth['id_tahun'].'"><button type="submit" class="btn btn-info mr-2"><i class="fa fa-calendar-check"></i> '.$qth['nm_tahun'].'</button></a>';
                }
                echo "<hr>";
                    if($_GET['tahun'] == TRUE){ 

                        // ========== PROSES SIMPAN DATA ==============
                        if(isset($_POST['submit'])){
                            $id_tahun = $_GET['tahun'];
                            $mhs = $_POST['mhs'];
                            $id_kas = 1;

                            foreach($mhs as $key){
                                $qinsert = mysqli_query($xkon, "insert into k_detail (id_detail, id_kas, id_tahun, id_mhs) values (NULL, $id_kas, $id_tahun, $key)");
                                if($qinsert == True){
                                    
                                }else{
                                    echo "DATA GAGAL DISIMPAN, Karena ".mysqli_error($xkon);
                                }
                            }
                        }

                        ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="tabelku">
                                <thead>
                                    <form method="post" action="">
                                    <tr>
                                        <td colspan="3" style="text-align: right">
                                            <button type="submit" name="submit" class="btn btn-primary mr-2"><i class="fa fa-save"></i> Simpan</button>
                                        </td>
                                        <td style="text-align: center">
                                            <input id="checkAll" type="checkbox"><label for='checkAll'>Select All</label>
                                        </td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th>No.</th>
                                        <th>NIM</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $result = mysqli_query($xkon, "select * from mahasiswa"); 
                                        $no = 0;
                                        while($row = mysqli_fetch_array($result)) { 
                                            $no++; 
                                            $id_mhs = $row["id_mhs"];
                                            $nim = $row['nim'];
                                            $nama_lengkap = $row['nama_lengkap'];
                                            ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $no; ?></td>
                                        <td style="text-align: center;"><?php echo $nim; ?></td>
                                        <td><?php echo $nama_lengkap;  ?></td>
                                        <td style="text-align: center;"> <input type="checkbox" name="mhs[]" value="<?php echo $id_mhs; ?>"></td>
                                    </tr>
                                    <?php } ?>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    <?php } //Tutup Apabila Tahun dipilih
                    else{
                        echo "";
                    }?>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#submit').prop("disabled", true);
    $("#checkAll").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
        $('#submit').prop("disabled", false);
        if ($('.chk').filter(':checked').length < 1){
                $('#submit').attr('disabled',true);}
    });

    $('input:checkbox').click(function() {
            if ($(this).is(':checked')) {
                $('#submit').prop("disabled", false);
            } else {
            if ($('.chk').filter(':checked').length < 1){
                $('#submit').attr('disabled',true);}
            }
    });
</script>