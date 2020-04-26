<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$id_transaksi = $_GET['id_transaksi'];

$query = "Call delete_transaksi('$id_transaksi')";
 
$eksekusi = mysqli_query($koneksi,$query);
 
?>