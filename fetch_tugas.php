<?php

//membuat koneksi ke database
include 'xcon.php';
//variabel nim yang dikirimkan form.php
$kode_tugas = $_GET['kode_tugas'];

//mengambil data
$query = mysqli_query($xkon, "select * from tugas where kode_tugas='$kode_tugas'");
$tugas = mysqli_fetch_array($query);
$data = array(
            'nama_tugas'      =>  @$tugas['nama_tugas']);
            'matkul'      =>  @$tugas['matkul']);
            'dosen'      =>  @$tugas['dosen']);
            'due_date'      =>  @$tugas['due_date']);
            'id_tugas'      =>  @$tugas['id_tugas']);

//tampil data
echo json_encode($data);
?>
