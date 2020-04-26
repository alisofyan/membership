<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$idsaldo = $_GET['idsaldo'];
$iduser = $_GET['iduser'];
$jumlah = $_GET['jumlah'];

$query = "CALL edit_saldo ('$idsaldo','$iduser','$jumlah')";
 
$eksekusi = mysqli_query($koneksi,$query);
if (!$eksekusi)
{
  echo("Error description: " . mysqli_error($koneksi));
}
else
{
	echo "berhasil";}
?>