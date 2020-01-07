<?php 
  require_once __DIR__. "/../../autoload/autoload.php";
  $id = postInput('buildingid');

  $data = array(
  	"customerid" => postInput('customerid'),
  	"buildingid" => postInput('buildingid'),
  	"price" => postInput('price'),
 
  );
  if ($_SESSION['admin_id']==0) {
  	header('location: order.php');
  }else
$db -> insert('order_hs',$data);

header('location: order.php?id='.$id);
   ?>