<?php 
session_start();
$user=$_REQUEST["name"];
$pass=$_REQUEST["password"];
$conn=mysqli_connect("localhost","root","","ql_homestay");
mysqli_query($conn,'SET NAMES "utf8"'); // hiển thị tiếng việt trên form
$sql="select * from user where username='$user' and password ='$pass'";
$kq=mysqli_query($conn,$sql);
$row=mysqli_fetch_object($kq);
$_SESSION["key"]=$row->status;
if ($row) {
	header("location:TrangChu.php");
}
else
{
	header("location:index.html");
}
?>