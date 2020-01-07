<?php 
	require_once __DIR__. "/../../autoload/autoload.php";
	$building = $db -> fetchAll('building' , array("district" => "Nha Trang"));

 ?>

<?php
	if (isset($_SESSION['admin_id'])) {
 		require_once __DIR__. "/../../layouts/headerCus.php";
 	}else{
 		require_once __DIR__. "/../../layouts/header.php";
 	}?>
<br><br><br><br>
<div class="container">
	
		<div class="row">
			<?php for($i = 0 ; $i < count($building) ; $i++){?>
			<a class="card col-sm-12 col-lg-3 col-md-6" href="order.php?id=<?php echo $building[$i]['id']; ?>" style="width: 18rem;">
				<img src="/luxstay/public/font-end/image/<?php echo $building[$i]["image"] ?>" class="card-img-top" alt="...">
				<div class="card-body" style="padding: 0px;padding-top: 5%">
					<h6 class="card-title grey"><?php echo $building[$i]["style"]; ?></h6>
					<p class="card-text fontbold"><i class="fa fa-fire iconhot" aria-hidden="true"></i> <?php echo $building[$i]["name"]; ?></p>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item" style="padding: 0px;padding-top: 5%"><?php echo
					 $building[$i]["numberroom"]." phòng ngủ - ".
					 $building[$i]["maxcustomer"]." khách - ".
					 $building[$i]["numberroom"]." phòng tắm" ; ?>
						
					</li>
					<li class="list-group-item fontbold" style="padding: 0px;padding-top: 5%"><?php echo number_format($building[$i]["price"])."₫"; ?> / đêm</li>
					<li class="list-group-item" style="padding: 0px;padding-top: 5%;padding-bottom: 10% "><?php echo $building[$i]["district"]; ?>
					</li>
				</ul>
			</a>
			<!--  -->
		<?php }?>
			
		</div>
	</div>
 	
<?php require_once __DIR__. "/../../layouts/footer.php" ;?>