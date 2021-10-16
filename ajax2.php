<?php

//membuat koneksi ke database
include 'xcon.php';
//variabel nim yang dikirimkan form.php
$kode_tugas = $_GET['kode_tugas'];

//mengambil data
$query = mysqli_query($xkon, "select * from tugas where kode_tugas='$kode_tugas'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'nama'      =>  @$mahasiswa['nama_tugas'],
            'matkul'      =>  @$mahasiswa['matkul'],
            'dosen'      =>  @$mahasiswa['dosen'],
            'id_tugas'      =>  @$mahasiswa['id_tugas'],
            'due_date'      =>  @$mahasiswa['due_date']);

//tampil data
echo json_encode($data);
?>
