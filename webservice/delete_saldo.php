<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$id_saldo = $_GET['id_saldo'];

$query = "Call delete_saldo('$id_saldo')";
 
$eksekusi = mysqli_query($koneksi,$query);
 
?>