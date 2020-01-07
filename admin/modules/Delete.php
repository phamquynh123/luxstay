<?php 
session_start();
error_reporting(0);
$user=$_REQUEST['id'];
$conn=mysqli_connect("localhost","root","","ql_homestay");
mysqli_query($conn,'SET NAMES "utf8"'); // hiển thị tiếng việt trên form
$sql="delete from user where id='$user'";
$kq=mysqli_query($conn,$sql);
if($kq)
	header("location:QuanTri.php");
 ?>