<?php require_once __DIR__. "/../autoload/autoload.php" ?>
<?php 
// error_reporting(0);
session_start();
$sum = 0;
// $timeTruoc = $_REQUEST['ngaytruoc'];
// $timeSau = $_REQUEST['ngaysau'];
$search = addslashes($_GET['search']);

// if ($search == "") {
//     $order = $db->fetchsql('SELECT order_hs.id, order_hs.createddate, customer.username, building.name, building.deposit,order_hs.price
//         FROM ((order_hs
//         INNER JOIN customer ON order_hs.customerid = customer.ID)
//         INNER JOIN building ON order_hs.buildingid = building.id)
//         ;');
// }
// else
// {
// }
    $order = $db->fetchsql('SELECT order_hs.id, order_hs.createddate, customer.username, building.name, building.deposit,order_hs.price
        FROM ((order_hs
        INNER JOIN customer ON order_hs.customerid = customer.ID)
        INNER JOIN building ON order_hs.buildingid = building.id)
      WHERE customer.username LIKE  "$search%"   ;');

//  WHERE order_hs.createddate BETWEEN "2019-10-12" AND "2019-10-17" 

    	if ($order) {
    		header('location: BaoCao.php');
    	}

?>
