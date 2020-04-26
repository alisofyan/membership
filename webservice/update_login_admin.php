<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$idpgw = $_GET['idpgw'];
$user = $_GET['user'];
$pass = $_GET['pass'];

$query = "CALL edit_login_admin ('$idpgw','$user','$pass')";
 
$eksekusi = mysqli_query($koneksi,$query);
if (!$eksekusi)
{
  echo("Error description: " . mysqli_error($koneksi));
}
else
{
	echo "berhasil";}
?>