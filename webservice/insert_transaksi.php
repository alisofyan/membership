<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";

$no_transaksi = $_GET['no_transaksi'];
$id_user = $_GET['id_user'];
$id_pegawai = $_GET['id_pegawai'];
$nilai_pembelian = $_GET['nilai_pembelian'];
$tgl_transaksi = $_GET['tgl_transaksi'];


$query = "CALL insert_transaksi ('$no_transaksi','$id_user','$id_pegawai','$nilai_pembelian','$tgl_transaksi')";
 
$eksekusi = mysqli_query($koneksi,$query);
 
?>