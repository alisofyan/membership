<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$idpgw = $_GET['idpgw'];
$namapgw = $_GET['namapgw'];
$jabatanpgw = $_GET['jabatanpgw'];

$query = "CALL edit_admin_info ('$idpgw','$namapgw','$jabatanpgw')";
 
$eksekusi = mysqli_query($koneksi,$query);
if (!$eksekusi)
{
  echo("Error description: " . mysqli_error($koneksi));
}
else
{
	echo "berhasil";}
?>