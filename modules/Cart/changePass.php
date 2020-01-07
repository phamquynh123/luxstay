<?php 
require_once __DIR__. "/../../autoload/autoload.php";

$id=$_SESSION['admin_id'];
	$data = array(
	"password" => postInput('NLpassword')
);
if (postInput('Npassword') == postInput('NLpassword')) {
	$sql = "id = ".$id." AND password = '".postInput('Cpassword')."'";
	$check = $db -> fetchOne('customer',$sql);

	if ($check!=null) {
		$db -> update('customer',$data,array('id' => $id));
		header('location: profile.php');
	}else {
		$_SESSION['error_pass']="Sai mật khẩu";
		header('location: profile.php');
	}
}



?>