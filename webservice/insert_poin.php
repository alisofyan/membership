<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";

$no_transaksi = $_GET['no_transaksi'];
$jml_poin = $_GET['jml_poin'];


$query = "CALL insert_poin ('$no_transaksi','$jml_poin')";
 
$eksekusi = mysqli_query($koneksi,$query);
 
?>