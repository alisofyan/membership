<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";

$nama = $_GET['nama'];
$jk = $_GET['jk'];
$tgl_lahir = $_GET['tgl_lahir'];
$email = $_GET['email'];
$hp = $_GET['hp'];
$alamat = $_GET['alamat'];


$query = "CALL insert_user_info ('$nama','$jk','$tgl_lahir','$email','$hp','$alamat')";
 
$eksekusi = mysqli_query($koneksi,$query);
 
?>