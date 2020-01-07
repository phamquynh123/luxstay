<?php 
// error_reporting(0);

$username=$_POST['username'];
$fullname=$_POST['fullname'];
$status=$_POST['status'];
$password=$_REQUEST['password'];
$conn=mysqli_connect("localhost","root","","ql_homestay");
mysqli_query($conn,'SET NAMES "utf8"'); // hiển thị tiếng việt trên form
// $sql="insert into user values ('$id','$user','$pass',N'$ten',$level)";
// $sql="insert into user (username , password , fullname , status ) values ($username','$password',N'$fullname','$status')";
$sql="insert into user (username,password,fullname,status) values ('$username','$password','$fullname','$status')" ;
$kq=mysqli_query($conn,$sql);
if($kq)
	header("location:QuanTri.php");
 ?>