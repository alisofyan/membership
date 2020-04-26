<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$id_poin = $_GET['id_poin'];

$query = "Call delete_poin('$id_poin')";
 
$eksekusi = mysqli_query($koneksi,$query);
 
?>