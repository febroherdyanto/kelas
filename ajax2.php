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
                <th rowspan="2">Total</th>
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
                    $cekmhs = mysqli_query($xkon, "select nim, nama_lengkap from mahasiswa where id_mhs=$id_mhs ORDER BY nim ASC");
                    while($fetch = mysqli_fetch_array($cekmhs)){
                        $nim = $fetch['nim'];
                        $nama_lengkap = $fetch['nama_lengkap'];
                ?>
                <td style="text-align: center;"><?php echo $nim; ?></td>
                <td><?php echo $nama_lengkap;  ?></td>
                <td style="text-align: center;"><?php if($row['k_1'] == 'Y'){ $k1 = 1;  echo "&#10003;"; }elseif($row['k_1'] == 'P'){ $k1 = 0; echo "P"; }else{ $k1 = 0; echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_2'] == 'Y'){ $k2 = 1; echo "&#10003;"; }elseif($row['k_2'] == 'P'){ $k2 = 0; echo "P"; }else{ $k2 = 0; echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_3'] == 'Y'){ $k3 = 1; echo "&#10003;"; }elseif($row['k_3'] == 'P'){ $k3 = 0; echo "P"; }else{ $k3 = 0; echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_4'] == 'Y'){ $k4 = 1; echo "&#10003;"; }elseif($row['k_4'] == 'P'){ $k4 = 0; echo "P"; }else{ $k4 = 0; echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_5'] == 'Y'){ $k5 = 1; echo "&#10003;"; }elseif($row['k_5'] == 'P'){ $k5 = 0; echo "P"; }else{ $k5 = 0; echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_6'] == 'Y'){ $k6 = 1; echo "&#10003;"; }elseif($row['k_6'] == 'P'){ $k6 = 0; echo "P"; }else{ $k6 = 0; echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_7'] == 'Y'){ $k7 = 1; echo "&#10003;"; }elseif($row['k_7'] == 'P'){ $k7 = 0; echo "P"; }else{ $k7 = 0; echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_8'] == 'Y'){ $k8 = 1; echo "&#10003;"; }elseif($row['k_8'] == 'P'){ $k8 = 0; echo "P"; }else{ $k8 = 0; echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_9'] == 'Y'){ $k9 = 1; echo "&#10003;"; }elseif($row['k_9'] == 'P'){ $k10 = 0; echo "P"; }else{ $k9 = 0; echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_10'] == 'Y'){ $k10 = 1; echo "&#10003;"; }elseif($row['k_10'] == 'P'){ $k11 = 0; echo "P"; }else{ $k10 = 0; echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_11'] == 'Y'){ $k11 = 1; echo "&#10003;"; }elseif($row['k_11'] == 'P'){ $k11 = 0; echo "P"; }else{ $k11 = 0; echo 'N'; } ?></td>
                <td style="text-align: center;"><?php if($row['k_12'] == 'Y'){ $k12 = 1; echo "&#10003;"; }elseif($row['k_12'] == 'P'){ $k11 = 0; echo "P"; }else{ $k12 = 0; echo 'N'; } ?></td>
                <td style="text-align: center;">
                        <?php
                            $total = $k1 +$k2 +$k3 +$k4 +$k5 +$k6 +$k7 +$k8 +$k9 +$k10 +$k11 + $k11;
                            echo $total;
                        ?>
                </td>
                <td style="text-align: center;"><a href="index.php?halaman=Upload-Bayar&tahun=<?php echo $q; ?>&nim=<?php echo $nim; ?>"><i class="fa fa-file-invoice-dollar"></i> BAYAR</a></td>
            </tr>
            <?php } } mysqli_close($xkon); ?>
        </tbody>
    </table>
</div>
