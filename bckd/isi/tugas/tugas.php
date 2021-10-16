<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h2 class="card-title"> Data Tugas TI.20.B.1</h2>
    </div>
    <div class=" text-center">
      <a href="index.php?halaman=Tambah-Tugas"><button type="submit" class="btn btn-info mb-3"><i class="bi-journal-plus"></i> Tambah Data Tugas</button></a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th>No.</th>
            <th>Kode Tugas</th>
            <th>Nama Tugas</th>
            <th>Mata Kuliah</th>
            <th>Due Date</th>
            <th>Status</th>
          </thead>
          <tbody>
            <?php

            $sel = mysqli_query($xkon, "select * from tugas");
            $date_now = date("Y-m-d");
            $no = 1;
            while($xd = mysqli_fetch_array($sel)){
              ?>

                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $xd['kode_tugas']; ?></td>
                  <td><?php echo $xd['nama_tugas']; ?></td>
                  <td><?php echo $xd['matkul']; ?></td>
                  <td><?php echo $xd['due_date']; ?></td>
                  <td><?php if($date_now > $xd['due_date']){ echo "TIDAK AKTIF"; }else{ echo "AKTIF"; } ?></td>

                </tr>

            <?php } ?>
          </tbody>
        </table>
      </div>


    </div>
  </div>
</div>
