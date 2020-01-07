<?php 
require_once __DIR__. "/autoload/autoload.php";
$building = $db -> fetchLimit('building' , 4 ,array());
 	/*for($i = 0 ; $i < count($building) ; $i++){
 		echo $building[$i]["id"] . " ";
 	}*/
 	
 	if (isset($_SESSION['admin_id'])) {
 		require_once __DIR__. "/layouts/headerCus.php";
 	}else{
 		require_once __DIR__. "/layouts/header.php";
 	}

 	$landMark = $db -> fetchLimit('building' , 4 , array("name" => "Landmark 81")); 
 	?>
 <?php include 'autoload/format.php'; ?>
 <?php 
 $fm=new Format() ?>
 	
 	<div class="container" id="header-wrap">
 		<br><br><br><br>
 		<h4><b>Không gian ưa thích</b></h4>
 		<div class="row">
 			<a href="/luxstay/modules/Cart/canho.php" class="space col-sm-12 col-lg-2 col-md-6  "style="margin-left: 0;text-decoration: none">
 				<img src="/luxstay/public/font-end/img/canho.jpg" class="left">
 				<p> Căn hộ</p>
 			</a>
 			<a href="/luxstay/modules/Cart/bietthu.php" class="space col-sm-12 col-lg-2 col-md-6 "style="text-decoration: none" >
 				<img src="/luxstay/public/font-end/img/bietthu.jpg" class="left">

 				<p> Biệt thự</p>
 			</a>
 			<a href="/luxstay/modules/Cart/nharieng.php" class="space col-sm-12 col-lg-2 col-md-6  "style="text-decoration: none" >
 				<img src="/luxstay/public/font-end/img/nharieng.jpg" class="left">

 				<p> Nhà riêng</p>
 			</a>
 			<a href="/luxstay/modules/Cart/studio.php" class="space col-sm-12 col-lg-2 col-md-6 " style="margin-right: 0;text-decoration: none">

 				<img src="/luxstay/public/font-end/img/studio.jpg" class="left">

 				<p> Studio</p>
 			</a>
 		</div>
 	</div>

 	<!-- Địa điểm nổi bật -->
 	<div class="container" id="body-warp">
 		<br>
 		<h4><b>Địa điểm nổi bật</b></h4>
 		<p>Cùng Luxstay bắt đầu chuyến hành trình chinh phục thế giới của bạn
 		</span></p>
 		<div class="row">
 			<a href="/luxstay/modules/Cart/dalat.php" class="place col-sm-12 col-lg-3 col-md-6" style="text-decoration:none"><div>
 				<div class="place-DL">
 					<br><br><br><br><br><br><br><br>
 					<h3><p>Đà Lạt</p></h3>
 					<p>1810 Chỗ ở</p>
 				</div>
 			</div></a>
 			<a href="/luxstay/modules/Cart/hanoi.php" class="place col-sm-12 col-lg-3 col-md-6" style="text-decoration:none">
 				<div >
 					<div class="place-HN" >
 						<br><br><br><br><br><br><br><br>
 						<h3><p>Hà Nội</p></h3>
 						<p>2371 Chỗ ở</p>
 					</div>
 				</div>
 			</a>
 			

 			<a href="/luxstay/modules/Cart/hcm.php" class="place col-sm-12 col-lg-3 col-md-6" style="text-decoration:none"><div  >
 				<div class="place-HCM">
 					<br><br><br><br><br><br><br><br>
 					<h3><p>TP.Hồ Chí Minh</p></h3>
 					<p>3227 Chỗ ở</p>
 					
 				</div>
 			</div></a>

 			<a href="/luxstay/modules/Cart/vungtau.php" class="place col-sm-12 col-lg-3 col-md-6" style="text-decoration:none">
 				<div >
 					<div class="place-VT">
 						<br><br><br><br><br><br><br><br>
 						<h3><p>Vũng Tàu</p></h3>
 						<p>711 Chỗ ở</p>
 					</div>
 				</div>
 			</a>
 			<a href="/luxstay/modules/Cart/nhatrang.php" class="place col-sm-12 col-lg-3 col-md-6" style="text-decoration:none">
 				<div >
 					<div class="place-NT">
 						<br><br><br><br><br><br><br><br>
 						<h3><p>Nha Trang</p></h3>
 						<p>894 Chỗ ở</p>
 					</div>
 				</div>
 			</a>
 			<a href="/luxstay/modules/Cart/quangninh.php" class="place col-sm-12 col-lg-3 col-md-6" style="text-decoration:none">
 				<div >
 					<div class="place-QN">
 						<br><br><br><br><br><br><br><br>
 						<h3><p>Quảng Ninh</p></h3>
 						<p>416 Chỗ ở</p>
 					</div>
 				</div>
 			</a>
 			<a href="/luxstay/modules/Cart/danang.php" class="place col-sm-12 col-lg-3 col-md-6" style="text-decoration:none">
 				<div >
 					<div class="place-DN">
 						<br><br><br><br><br><br><br><br>
 						<h3><p>Đằ Nẵng</p></h3>
 						<p>1311 Chỗ ở</p>
 					</div>
 				</div>
 			</a>
 			<a href="/luxstay/modules/Cart/hoian.php" class="place col-sm-12 col-lg-3 col-md-6" style="text-decoration:none">
 				<div >
 					<div class="place-HA">
 						<br><br><br><br><br><br><br><br>
 						<h3><p>Hội An</p></h3>
 						<p>280 Chỗ ở</p>
 					</div>
 				</div>
 			</a>
 		</div>
 	</div>
 	<!--  -->
 	<div class="container">
 		<br><br><br>
 		<h4><b>Lựa chọn phổ biến</b></h4>
 		<p>Thêm trải nghiệm, thêm nhiều niềm vui cùng các chủ nhà của chúng tôi
 			<span class="right "><a href="/luxstay/modules/Cart/full.php" class="red">Xem thêm</a>
 			</p>
 			<div class="row">
 				<?php for($i = 0 ; $i < count($building) ; $i++){?>
 					<a class="card col-sm-12 col-lg-3 col-md-6" style="width: 18rem;text-decoration: none;" href="modules/Cart/order.php?id=<?php echo $building[$i]['id'] ?>">
 						<img src="/luxstay/public/font-end/image/<?php echo $building[$i]["image"] ?>" class="card-img-top" alt="...">
 						<div class="card-body" style="padding: 0px;padding-top: 5%">
 							<h6 class="card-title grey"><?php echo $building[$i]["style"]; ?></h6>
 							<p class="card-text fontbold"><i class="fa fa-fire iconhot" aria-hidden="true"></i> <?php echo $fm->textShorten($building[$i]["name"],50); ?></p>
 						</div>
 						<ul class="list-group list-group-flush">
 							<li class="list-group-item" style="padding: 0px;padding-top: 5%"><?php echo
 							$building[$i]["numberroom"]." phòng ngủ - ".
 							$building[$i]["maxcustomer"]." khách - ".
 							$building[$i]["numberroom"]." phòng tắm" ; ?>

 						</li>
 						<li class="list-group-item fontbold" style="padding: 0px;padding-top: 5%"><?php echo number_format($building[$i]["price"]); ?> VNĐ / đêm</li>
 						<li class="list-group-item" style="padding: 0px;padding-top: 5%"><?php echo $building[$i]["district"]; ?>
 					</li>
 				</ul>
 			</a>
 			<!--  -->
 		<?php }?>

 	</div>
 </div>
 <div class="container">
 	<br><br><br>
 	<h4><b>Vinhomes Landmark 81</b></h4>
 	<p>Chạm tay vào bầu trời và vươn tầm mắt chiêm ngưỡng toàn cảnh vẻ đẹp Sài Gòn từ tòa nhà cao nhất Việt Nam
 		<span class="right "><a href="/luxstay/modules/Cart/lanmark.php" class="red">Xem thêm</a></p>
 			<div class="row">
 				<?php for($i = 0 ; $i < count($landMark) ; $i++){?>
 					<a class="card col-sm-12 col-lg-3 col-md-6" style="width: 18rem;text-decoration: none" href="modules/Cart/order.php?id=<?php echo $landMark[$i]['id'] ?>">
 						<img src="/luxstay/public/font-end/image/<?php echo $landMark[$i]["image"]; ?>" alt="...">
 						<div class="card-body" style="padding: 0px;padding-top: 5%">
 							<h6 class="card-title grey">CĂN HỘ CHUNG CƯ</h6>
 							<p class="card-text fontbold"><i class="fa fa-bolt iconbolt" aria-hidden="true"></i>
 							<?php echo $fm->textShorten($landMark[$i]["name"],50); ?></p>
 						</div>
 						<ul class="list-group list-group-flush" >
 							<li class="list-group-item" style="padding: 0px;padding-top: 5%"><?php echo $landMark[$i]["maxcustomer"]; ?> khách - <?php echo $landMark[$i]["numberroom"]; ?> phòng ngủ - <?php echo $landMark[$i]["numberroom"]; ?> phòng tắm</li>
 							<li class="list-group-item fontbold" style="padding: 0px;padding-top: 5%"><?php echo number_format($landMark[$i]["price"]); ?>₫/đêm</li>
 							<li class="list-group-item" style="padding: 0px;padding-top: 5%"><?php echo $landMark[$i]["district"]; ?></li>
 						</ul>

 					</a>
 					<!--  -->
 				<?php }?>
 			</div>
 		</div>
 		<div class="container">
 			<br><br><br>
 			<h4><b>Ưu đãi hấp dẫn</b></h4>
 			<p>Chỉ có tại Luxstay, hấp dẫn và hữu hạn, book ngay!

 			</p>
 			<div class="row">

					<!-- 	<div class="carousel-item active" data-interval="10000">
							<img src="img/quangcao/event_1_1563507400.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item" data-interval="2000">
							<img src="img/quangcao/event_1_1563941376.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="img/quangcao/event_1_1563944245.png" class="d-block w-100" alt="...">
						</div>
							<div class="carousel-item">
							<img src="img/quangcao/event_4_1563507432.jpg" class="d-block w-100" alt="...">
						</div>
							<div class="carousel-item">
							<img src="img/quangcao/event_5_1563156898.jpg" class="d-block w-100" alt="...">
						</div>
						
							<div class="carousel-item">
							<img src="img/quangcao/event_7_1563507467.jpg.jpg" class="d-block w-100" >
						</div> -->



						<div id="carouselExampleFade" class="carousel slide carousel-fade col-lg-12 col-md-12 col-sm-12" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="/luxstay/public/font-end/image/quangcao/event_1_1563507400.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="/luxstay/public/font-end/image/quangcao/event_1_1563941376.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="/luxstay/public/font-end/image/quangcao/event_1_1563944245.png" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="/luxstay/public/font-end/image/quangcao/event_5_1563156898.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="/luxstay/public/font-end/image/quangcao/event_7_1563507467.jpg" class="d-block w-100" >
								</div>
								<div class="carousel-item">
									<img src="/luxstay/public/font-end/image/quangcao/event_4_1563507432.jpg" class="d-block w-100" >
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>



				</div>
			
			<a href="#header-wrap" class="backup" id="backtotop"><i class="fa fa-arrow-up icon-up-menu"  aria-hidden="true" ></i></a>
			<?php require_once __DIR__. "/layouts/footer.php" ;?>
