<?php
 // error_reporting(0);


$Username = $_POST['txtUsername'];
$Password = $_POST['txtPassword'];
$Fullname = $_POST['txtFullname'];
$Email = $_POST['txtEmail'];
$Telephone = $_POST['txtTele'];
// if ($username == "" || $password == "" || $name == "" || $email == "") {
// 				   echo "bạn vui lòng nhập đầy đủ thông tin";
// 				}
// 				$sql="select * from users where username='$username'";
// 					$kt=mysqli_query($conn, $sql);
 
// 					if(mysqli_num_rows($kt)  > 0){
// 						echo "Tài khoản đã tồn tại";
$conn = mysqli_connect("localhost","root","","thongtin");
mysqli_query($conn,'SET NAMES "utf8"');
$sql="insert into qlkh values ('$Username','$Password','$Fullname','$Email','$Telephone') ";
$kq=mysqli_query($conn,$sql);
mysqli_close($conn);

?>
