<?php
	if (isset($_GET['page'])) {
	 	if ($_GET['page']=="promo") {
	 		include 'home.php';
	 	}
	 	if ($_GET['page']=="pegawai") {
	 		include 'pegawai.php';
	 	}
	 	if ($_GET['page']=="toko") {
	 		include 'toko.php';
	 	}
	 }
	 else{
	 	include 'transaksi.php';
	 } 
?>