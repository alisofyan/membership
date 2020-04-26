<?php
//Web Service ini dibuat dengan SAA WebServ Generator 
//Tools Speed Up Property dari Sejuta Aplikasi Asia 
 
$host="localhost";
$user="root";
$pass="";
$db="membership";      
 
$koneksi = mysqli_connect($host, $user, $pass) 
or die (mysql_error());            
 
$query = mysqli_select_db($koneksi,$db)              
or die(mysqli_error()." Database Not Found!");   
?>                          
