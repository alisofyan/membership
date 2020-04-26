<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$iduser = $_GET['iduser'];
$nama_user = $_GET['nama_user'];
$jk_user = $_GET['jk_user'];
$tgl_user = $_GET['tgl_user'];
$email_user = $_GET['email_user'];
$hp_user = $_GET['hp_user'];
$alamat_user = $_GET['alamat_user'];

$query = "CALL edit_user_info ('$iduser','$nama_user','$jk_user','$tgl_user','$email_user','$hp_user','$alamat_user')";
 
$eksekusi = mysqli_query($koneksi,$query);
if (!$eksekusi)
{
  echo("Error description: " . mysqli_error($koneksi));
}
else
{
	echo "berhasil";}
?>