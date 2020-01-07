<?php 
// error_reporting(0);
$id = $_POST["id"];
$username=$_POST['username'];
$fullname=$_POST['fullname'];
$status=$_POST['status'];
$telephone=$_POST['telephone'];
$password=$_REQUEST['password'];
$conn=mysqli_connect("localhost","root","","ql_homestay");
mysqli_query($conn,'SET NAMES "utf8"'); // hiển thị tiếng việt trên form

// $sql="insert into user (username,password,fullname,status) values ('$username','$password','$fullname','$status')" ;
$sql="update user SET username='$username',fullname='$fullname',telephone='$telephone',password='$password',status='$status'  where id='$id'";
$kq=mysqli_query($conn,$sql);
if($kq)
	header("location:QuanTri.php");
 ?>