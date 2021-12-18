<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="fa fa-plus"></i> Tambah Polling Baru</h4>
            <p class="card-description"> </p>
            <?php
            if(isset($_POST['submit'])){
                $xid = '';
                $xjudul = trim(stripslashes(htmlspecialchars(strtoupper($_POST['judul']))));
                $xtgl_mulai = trim(stripslashes(htmlspecialchars($_POST['tgl_mulai'])));
                $xtgl_selesai = trim(stripslashes(htmlspecialchars($_POST['tgl_selesai'])));

                $qinsertpoll = "INSERT INTO p_polling (id_poll, judul, tgl_mulai, tgl_selesai)values (NULL, '$xjudul', '$xtgl_mulai', '$xtgl_selesai')";
                $xproses = mysqli_query($xkon, $qinsertpoll);
                if($xproses == TRUE){
                    echo '<div class="col-md-12 stretch-card transparent">
                            <div class="card card-light-info" style="background: #03fc77;">
                                <div class="card-header">
                                    <strong><i class="fa fa-check"></i> SUKSES !</strong> <br> Data berhasil ditambahkan.
                                </div>
                            </div>
                        </div>';
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
                    <label class="col-sm-3 col-form-label">Judul Polling</label>
                    <div class="col-sm-9">
                        <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Polling" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Mulai Polling</label>
                    <div class="col-sm-9">
                        <input type="date" name="tgl_mulai" class="form-control" placeholder="Pilih Tanggal" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Berakhirnya Polling</label>
                    <div class="col-sm-9">
                        <input type="date" name="tgl_selesai" class="form-control" placeholder="Pilih Tanggal" required>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mr-2"><i class="fa fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>
</div>
