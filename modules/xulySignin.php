<?php
require_once __DIR__. "/../autoload/autoload.php"; 
	$data = array(
		"username"=>postInput('username'),
		"email"=>postInput('Email'),
		"password"=>postInput('password'),
		"telephone"=>postInput('Telephone')
	);

	$db -> insert('customer',$data); 
	?>