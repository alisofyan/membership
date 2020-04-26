<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";

$id_user = $_GET['id_user'];
$username = $_GET['username'];
$password = $_GET['password'];

 

$query = "CALL insert_login_user ('$id_user','$username', '$password')";
 
$eksekusi = mysqli_query($koneksi,$query);
 
?>