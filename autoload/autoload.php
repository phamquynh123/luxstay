<?php 
session_start();
require_once __DIR__. "/../librarys/database.php";
require_once __DIR__. "/../librarys/function.php";
$db = new database;

if (!isset($_SESSION['admin_id'])) {
	
}

 ?>