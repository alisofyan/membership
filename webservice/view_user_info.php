<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$vKet = $_GET['vKet'];
$sql = "Call  user_info_view('$vKet')";
 
$query = mysqli_query($koneksi,$sql);  
$data = array();
 
while($row = mysqli_fetch_assoc($query)) 
{ 
array_push($data, $row);
} 

echo json_encode($data);

?>