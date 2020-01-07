<!-- <?php 


$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Adrress=$_POST['Address'];
$Tittle=$_POST['Tittle'];
$Content=$_POST['Content'];

$conn=mysqli_connect("localhost","root","","ql_homestay");
mysqli_query($conn,'SET NAMES "utf8"'); // hiển thị tiếng việt trên form
$sql="insert into contact values ('$Name','$Email','$Adrress','$Tittle','$Content')";
$kq=mysqli_query($conn,$sql);
?>
 -->
<?php
require_once __DIR__. "/../../autoload/autoload.php"; 
	$data = array(
		"Name"=>postInput('Name'),
		"Email"=>postInput('Email'),
		"Address"=>postInput('Address'),
		"Tittle"=>postInput('Tittle'),
		"Content"=>postInput('Content')

	);

	if ($db -> insert('contact',$data); ) {
		# code...
	}
	?>