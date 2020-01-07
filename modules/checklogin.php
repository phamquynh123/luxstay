<?php
session_start();
require_once __DIR__. "/../librarys/database.php";
$db = new database;
$username = $_POST['Username'];
$password = $_POST['Password'];
$error = [];
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$data =
	[
		'username' => $username,
		'password' => $password
	];
	var_dump($data);
	if($data['username'] == ''){
		$error['username'] = "username khong duoc de trong";
	}
	if($data['password'] == ''){
		$error['password'] = "Mat Khau khong duoc de trong";
	}
	if(empty($error)){
		$isCheck = $db->fetchOne('customer' ,"username = '".$data['username']."' AND password = '".$data['password']."'");
		if($isCheck != NULL){
			header("location: http://localhost:8080/luxstay/");
			$_SESSION['admin_id'] = $isCheck['ID'];
			$_SESSION['user_name']=$isCheck['username'];
			
		}
		else{
			header("location: login.php");
		}
	}
}   
?>