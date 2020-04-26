<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$id_user = $_GET['id_user'];

$query = "Call delete_user_info('$id_user')";
 
$eksekusi = mysqli_query($koneksi,$query);
 
?>