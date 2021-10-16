

<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h2 class="card-title"> Data Mahasiswa TI.20.B.1</h2>
    </div>
    <div class=" text-center">
      <a href="index.php?halaman=Tambah-Mahasiswa"><button type="submit" class="btn btn-info mb-3"><i class="bi-person-plus"></i> Tambah Data Mahasiswa</button></a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th>No.</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Kelas</th>
          </thead>
          <tbody>
            <?php

            $sel = mysqli_query($xkon, "select * from mahasiswa");
            while($xd = mysqli_fetch_array($sel)){
              ?>

                <tr>
                  <td><?php echo $xd['id_mhs']; ?></td>
                  <td><?php echo $xd['nim']; ?></td>
                  <td><?php echo $xd['nama_lengkap']; ?></td>
                  <td><?php if($xd['kelas']){ echo "TI.20.B.1"; }else{ echo "Kelas Lain";} ?></td>

                </tr>

            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
