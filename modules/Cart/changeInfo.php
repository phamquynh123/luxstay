<?php 
require_once __DIR__. "/../../autoload/autoload.php";
$id=$_SESSION['admin_id'];

$data = array(
	"fullname" => postInput('txtfullname'),
	"email" => postInput('txtemail'),
	"telephone" => postInput('nphone'),
	"address" => postInput('txtaddress'),
	"gender" => postInput('ngender'),
	"description" => postInput('txtdescription')
);
$db -> update('customer',$data,array('id' => $id));
header('location: profile.php');

?>