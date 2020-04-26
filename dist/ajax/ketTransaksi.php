<?php 
  include "../../webservice/koneksi.php";
  $vKet = $_GET['vKet'];
  $sql = "Call  user_info_view('$vKet')";
 
  $query = mysqli_query($koneksi,$sql);  
  $row = mysqli_fetch_assoc($query);

?>


<h6>ATAS NAMA</h6>

  <ul>
  <!-- ID -->
    <label>ID User : </label>
    <label><?= $row['id_user'] ?></label><br>
  <!-- Nama -->
    <label>Nama : </label>
    <label><?= $row['nama'] ?></label><br>
  <!-- Tanggal -->
    <label>Tanggal : </label>
    <label><?php
                $tgl=date('Y-m-d');
                echo $tgl;
              ?>  
    </label>
  </ul>