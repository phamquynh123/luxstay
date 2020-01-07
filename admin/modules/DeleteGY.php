<?php 
session_start();
error_reporting(0);
$id=$_REQUEST['id'];
$conn=mysqli_connect("localhost","root","","ql_homestay");
mysqli_query($conn,'SET NAMES "utf8"'); // hiển thị tiếng việt trên form
$sql="delete from contact where id='$id'";
$kq=mysqli_query($conn,$sql);
if($kq)
	header("location:Gopy.php");
 ?>