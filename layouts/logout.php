<?php 
session_start();
unset($_SESSION['admin_id']);
header("location: http://localhost:8080/luxstay/");
 ?>