<?php
$q = intval($_GET['q']);
include 'xcon.php';?>

<div class="table-responsive">
    <table class="table table-striped table-bordered" id="tabelku">
        <thead>
            <tr style="text-align: center;">
                <th rowspan="2">No.</th>
                <th rowspan="2">NIM</th>
                <th rowspan="2">Nama Mahasiswa</th>
                <th colspan="12">Bulan</th>
                <th rowspan="2">Status</th>
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
                $result = mysqli_query($xkon, "select * from k_detail where id_tahun=$q"); 
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
                <td style="text-align: center;"><?php if($row['k_1'] == 'Y'){ echo "&#10003;"; }elseif($row['k_1'] == 'P'){ echo "P"; }else{ echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_2'] == 'Y'){ echo "&#10003;"; }elseif($row['k_2'] == 'P'){ echo "P"; }else{ echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_3'] == 'Y'){ echo "&#10003;"; }elseif($row['k_3'] == 'P'){ echo "P"; }else{ echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_4'] == 'Y'){ echo "&#10003;"; }elseif($row['k_4'] == 'P'){ echo "P"; }else{ echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_5'] == 'Y'){ echo "&#10003;"; }elseif($row['k_5'] == 'P'){ echo "P"; }else{ echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_6'] == 'Y'){ echo "&#10003;"; }elseif($row['k_6'] == 'P'){ echo "P"; }else{ echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_7'] == 'Y'){ echo "&#10003;"; }elseif($row['k_7'] == 'P'){ echo "P"; }else{ echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_8'] == 'Y'){ echo "&#10003;"; }elseif($row['k_8'] == 'P'){ echo "P"; }else{ echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_9'] == 'Y'){ echo "&#10003;"; }elseif($row['k_9'] == 'P'){ echo "P"; }else{ echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_10'] == 'Y'){ echo "&#10003;"; }elseif($row['k_10'] == 'P'){ echo "P"; }else{ echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_11'] == 'Y'){ echo "&#10003;"; }elseif($row['k_11'] == 'P'){ echo "P"; }else{ echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_12'] == 'Y'){ echo "&#10003;"; }elseif($row['k_12'] == 'P'){ echo "P"; }else{ echo 'N'; } ?></td>
                <td style="text-align: center;"><?php echo $row['total_tahun']; ?></td>
                <td style="text-align: center;"><a href="index.php?halaman=Payment-Kas&tahun=<?php echo $q; ?>&nim=<?php echo $nim; ?>"><i class="fa fa-qrcode"></i> BAYAR</a></td>
            </tr>
            <?php } } mysqli_close($xkon); ?>
        </tbody>
    </table>
</div>
