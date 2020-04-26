<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$idpegawai = $_GET['idpegawai'];
$nama = $_GET['nama'];
$jabatan = $_GET['jabatan'];

$query = "Call update_admin_info('$idpegawai','$nama','$jabatan')";
 
$eksekusi = mysqli_query($koneksi,$query);
 
?>