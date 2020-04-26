<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$username = $_GET['username'];
$password = $_GET['password'];
$id_pegawai = $_GET['id_pegawai'];
 

$query = "CALL insert_login_admin ('$username', '$password', '$id_pegawai')";
 
$eksekusi = mysqli_query($koneksi,$query);
 
?>