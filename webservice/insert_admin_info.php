<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$nama_pegawai = $_GET['nama_pegawai'];
$jabatan_pegawai = $_GET['jabatan_pegawai'];
 

$query = "CALL insert_admin_info ('$nama_pegawai', '$jabatan_pegawai')";
 
$eksekusi = mysqli_query($koneksi,$query);
 
?>