<?php
$url='localhost';
$username='root';
$password='';
$db="soapwork";
$conn=mysqli_connect($url,$username,$password,$db);
if(!$conn){
 die('Could not Connect My Sql:' .mysqli_error($conn));
}
?>