<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$idTRX = $_GET['idTRX'];
$noTRX = $_GET['noTRX'];
$iduser = $_GET['iduser'];
$idpgw = $_GET['idpgw'];
$nilai = $_GET['nilai'];
$tglTRX = $_GET['tglTRX'];

$query = "CALL edit_transaksi ('$idTRX','$noTRX','$iduser','$idpgw','$nilai','$tglTRX')";
 
$eksekusi = mysqli_query($koneksi,$query);
if (!$eksekusi)
{
  echo("Error description: " . mysqli_error($koneksi));
}
else
{
	echo "berhasil";}
?>