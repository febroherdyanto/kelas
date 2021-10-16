<?php

//membuat koneksi ke database
include 'xcon.php';
//variabel nim yang dikirimkan form.php
$nim = $_GET['nim'];

//mengambil data
$query = mysqli_query($xkon, "select * from mahasiswa where nim='$nim'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'nama'      =>  @$mahasiswa['nama_lengkap'],
            'no_hp'     =>  @$mahasiswa['no_hp'],
            'email'     =>  @$mahasiswa['email']);

//tampil data
echo json_encode($data);
?>
