
<?php 
$db = mysqli_connect("localhost", "root", "", "ql_homestay");
$productName=$_POST['productName'];
$district=$_POST['district'];
$style=$_POST['style'];
$buildingarea=$_POST['area'];
$room=$_POST['room'];
$price=$_POST['price'];
$maxcustomer=$_POST['customer'];
$description=$_POST['description'];
$deposit=$_POST['deposit'];
mysqli_query($db,'SET NAMES "utf8"');

if (isset($_POST['Upload'])) {
  	// Get image name
 $image = $_FILES['image']['name'];
  	// Get text

  	// image file directory
 $target = "public/font-end/".basename($image);

 $sql = "INSERT INTO building (name,district,style,buildingarea,price,numberroom,maxcustomer,description,deposit,image) VALUES ('$productName','$district','$style','$buildingarea','$price','$room','$maxcustomer','$description','$deposit','$image')";
  	// execute query
 if (($productName!="")&&($district!="")&&($style!="")&&($buildingarea!="")&&($room!="")&&($price!="")&&($maxcustomer!="")&&($description!="")&&($deposit!="")) {

  mysqli_query($db, $sql);
  header('location: NCC.php');
}


  	// if (move_uploaded_file($_FILES['image'], $target)) {
  	// 	$msg = "Image uploaded successfully";
  	// }else{
  	// 	$msg = "Failed to upload image";
  	// }
}

  // $data = array(
  // 	"name" => postInput('productName'),
  // 	"district" => postInput('district'),
  // 	"style" => postInput('style'),
  // 	"buildingarea" => postInput('area'),
  // 	"numberroom" => postInput('room'),
  // 	"price" => postInput('price'),
  // 	"maxcustomer" => postInput('customer'),
  // 	"description" => postInput('description'),
  // 	"deposit" => postInput('deposit'),

  // );
  // if (postInput('productName') != 'name'  ) {
  // 	$db -> insert('building',$data); 
  // }
?>