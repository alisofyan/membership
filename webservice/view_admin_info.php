<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
include "koneksi.php";
 
$vCari = $_GET['vCari'];
$sql = "Call  view_admin_info('$vCari')";
 
$query = mysqli_query($koneksi,$sql);  
//$data=[];
$data = array();
 
while($row = mysqli_fetch_assoc($query)) 
{ 
//$data[] = $row;
array_push($data, $row);
} 

echo json_encode($data);

?>