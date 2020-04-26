<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$id_pegawai = $_GET['id_pegawai'];

$query = "Call delete_admin_info('$id_pegawai')";
 
$eksekusi = mysqli_query($koneksi,$query);
 
?>