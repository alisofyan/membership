<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$idpoin = $_GET['idpoin'];
$noTRX = $_GET['noTRX'];
$jumlah = $_GET['jumlah'];

$query = "CALL edit_poin ('$idpoin','$noTRX','$jumlah')";
 
$eksekusi = mysqli_query($koneksi,$query);
if (!$eksekusi)
{
  echo("Error description: " . mysqli_error($koneksi));
}
else
{
	echo "berhasil";}
?>