<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$idpoin = $_GET['idpoin'];
$noTRX = $_GET['noTRX'];
$jml_poin = $_GET['jml_poin'];

$query = "CALL poin_updatenew ('$idpoin','$noTRX','$jml_poin')";
 
$eksekusi = mysqli_query($koneksi,$query);
if (!$eksekusi)
{
  echo("Error description: " . mysqli_error($koneksi));
}
else
{
	echo "berhasil";}
?>