<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h2 class="card-title"> Data Peminjaman Uang Kas TI.20.B.1</h2>
    </div>
    <div class=" text-center">
      <a href="index.php?halaman=Tambah-Peminjaman-Uang"><button type="submit" class="btn btn-info mb-3"><i class="icon-plus"></i> Ajukan Peminjaman Uang Kas</button></a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th>No.</th>
            <th>NIM Mahasiswa</th>
            <th>Tanggal Pengajuan</th>
            <th>Jumlah Pengajuan</th>
            <th>Alasan</th>
            <th>Status</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            <?php

            $sel = mysqli_query($xkon, "select * from pu");

            $no = 1;
            while($xd = mysqli_fetch_array($sel)){
              ?>

                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $xd['id_mhs']; ?></td>
                  <td><?php echo $xd['tgl_pengajuan']; ?></td>
                  <td><?php echo $xd['jml_pengajuan']; ?></td>
                  <td><?php echo $xd['alasan']; ?></td>
                  <td><?php echo $xd['status']; ?></td>
                  <td>LIHAT | GANTI STATUS </td>

                </tr>

            <?php } ?>
          </tbody>
        </table>
      </div>


    </div>
  </div>
</div>
