<?php require_once __DIR__. "/../../autoload/autoload.php"; ?>
<?php require_once __DIR__. "/../../layouts/headerprofile.php" ;?>
<?php 
$id=$_SESSION['admin_id'];
$name = $_SESSION['user_name'];
// $customer = $db -> fetchID('customer',$id);
// $id=getInput('id');
$customer = $db -> fetchID('customer',$id);
$showOrder=$db->showOrderbyId($id);


//$order = $db->fetchsql("SELECT order_hs.id , building.district , building.image,order_hs.price , building.name FROM order_hs , building WHERE EXISTS (SELECT * FROM customer WHERE order_hs.customerid = ".$id." AND order_hs.buildingid = building.id)");


	
?>

<br><br><br><br>
<hr>
<div class="container bootstrap snippet">
	
	<div class="row">
		<div class="col-sm-3"><!--left col-->


			<div class="text-center">
				<img src="../../public/font-end/<?php echo $customer['image']; ?>" class="avatar img-circle img-thumbnail" alt="avatar">
				<form method="POST" enctype="multipart/form-data">
					<input type="file" name="image" class="text-center center-block file-upload">
				
				</form>
			</div>
		</hr><br>




		<ul class="list-group">
			<li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
			<li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
			<li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
			<li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
			<li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
		</ul> 

		<div class="panel panel-default">
			<div class="panel-heading">Social Media</div>
			<div class="panel-body">
				<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
			</div>
		</div>

	</div><!--/col-3-->
	<div class="col-sm-9">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
			<li><a data-toggle="tab" href="#changeinfo">Sửa thông tin</a></li>
			<li><a data-toggle="tab" href="#changepass">Đổi mật khẩu</a></li>
			<li><a data-toggle="tab" href="#order">Thông tin đặt hàng</a></li>
		</ul>


		<div class="tab-content">
			<!-- home -->
			<div class="tab-pane active" id="home">


				<hr>
				<form class="form" action="##" method="post" id="registrationForm">
					<div class="form-group">

						<div class="col-xs-6">
							<label for="fullname"><h4>Username</h4></label>
							<input type="text" class="form-control" name="username" id="fullname" value="<?php echo $_SESSION['user_name'] ; ?>" disabled="true">
						</div>
					</div>
					<div class="form-group">

						<div class="col-xs-6">
							<label for="fullname"><h4>Fullname</h4></label>
							<input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $customer['fullname'] ; ?>" disabled="true">
						</div>
					</div>


					<div class="form-group">

						<div class="col-xs-6">
							<label for="email"><h4>Email</h4></label>
							<input type="email" class="form-control" name="email" id="email" value="<?php echo $customer['email'] ; ?>"  disabled="true">
						</div>
					</div>
					<div class="form-group">

						<div class="col-xs-6">
							<label for="phone"><h4>Phone</h4></label>
							<input type="text" class="form-control" name="phone" id="phone" value="<?php echo $customer['telephone'] ; ?>"  disabled="true">
						</div>
					</div>




					<div class="form-group">

						<div class="col-xs-6">
							<label for="last_name"><h4>Address</h4></label>
							<input type="text" class="form-control" name="address" id="last_name" value="<?php echo $customer['address'] ; ?>"  disabled="true">
						</div>
					</div>



					<div class="form-group">
						<div class="col-xs-6">
							<label for="gender"><h4>Giới Tính</h4></label>
							<input type="text" class="form-control" name="gender" id="gender" 
							value="<?php if( $customer['gender']==1){
								echo "Nam";
								}else{
									echo "Nữ";
								}  ?>"
								disabled="true">
							</div>
						</div>

						<div class="form-group">

							<div class="col-xs-6">
								<label for="description"><h4>Description</h4></label>
								<input type="text" name="description" class="form-control"   value="<?php echo $customer['description'] ; ?>"  disabled="true">
							</div>
						</div>
						<div class="form-group">

							<div class="col-xs-6">
								<label for="password"><h4>Password</h4></label>
								<input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password." value="<?php echo $customer['password'] ; ?>"  disabled="true" >
							</div>
						</div>
					</form>
				</div>



				<!-- Sửa thông tin -->
				<div class="tab-pane " id="changeinfo">
					<hr>
					<form class="form" action="changeInfo.php" method="POST" id="registrationForm">
						<div class="form-group">

							<div class="col-xs-6">
								<label for="first_name"><h4>Fullname</h4></label>
								<input type="text" class="form-control" name="txtfullname" id="first_name" placeholder="Fullname" value="<?php echo $customer['fullname'] ; ?>"  title="enter your first name if any.">
							</div>
						</div>
						<div class="form-group">

							<div class="col-xs-6">
								<label for="email"><h4>Email</h4></label>
								<input type="email" class="form-control" name="txtemail" id="email" placeholder="you@email.com" value="<?php echo $customer['email'] ; ?>"  title="enter your email.">
							</div>
						</div>
						<div class="form-group">

							<div class="col-xs-6">
								<label for="phone"><h4>Phone</h4></label>
								<input type="text" class="form-control" name="nphone" id="phone" placeholder="Enter phone" value="<?php echo $customer['telephone'] ; ?>"  title="Số điện thoại liên lạc">
							</div>
						</div>




						<div class="form-group">

							<div class="col-xs-6">
								<label for="last_name"><h4>Address</h4></label>
								<input type="text" class="form-control" name="txtaddress" id="last_name" placeholder="Address" value="<?php echo $customer['address'] ; ?>"  title="Địa chỉ liên hệ">
							</div>
						</div>



						<div class="form-group">
							<div class="col-xs-6">
								<label for="gender"><h4>Giới Tính</h4></label>
								<select class="custom-select" style="height: 34px" value="" name="ngender" >


									<option  value="1">Nam</option>
									<option  value="0">Nữ</option>

								</select>
							</div>
						</div>

						<div class="form-group">

							<div class="col-xs-6">
								<label for="description"><h4>Description</h4></label>
								<input type="text" name="txtdescription" class="form-control"  placeholder="Miêu tả bản thân" value="<?php echo $customer['description'] ; ?>" title="Đẹp trai , xynh gái nè!!!">
							</div>
						</div>
						<div class="form-group">

							<div class="col-xs-6">
								<label for="password"><h4>Password</h4></label>
								<input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password." value="<?php echo $customer['password'] ; ?>" disabled="true" >
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<br>
								<button class="btn btn-lg btn-success"  name="save" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>Save</button>
								<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
							</div>
						</div>
					</form>

					<hr>

				</div>


				<!--changePass-->

				<div class="tab-pane" id="changepass">

					<h2></h2>

					<hr>
					<form class="form" action="changePass.php" method="post" id="registrationForm">
						<center>
							<div class="form-group">

								<div class="col-xs-7">
									<label for="password"><h4>Mật khẩu cũ</h4></label>
									<input type="password" class="form-control" name="Cpassword" id="password"  placeholder="Mật khẩu cũ" >

								</div>
							</div>
							<div class="form-group">

								<div class="col-xs-7">
									<label for="password"><h4>Mật khẩu mới</h4></label>
									<input type="password" class="form-control" name="Npassword" id="password" placeholder="Mật khẩu mới" >
								</div>
							</div>
							<div class="form-group">

								<div class="col-xs-7">
									<label for="password"><h4>Xác nhận mật khẩu mới</h4></label>
									<input type="password" class="form-control" name="NLpassword" id="password" placeholder="Xác nhận mật khẩu mới" >
								</div>
							</div>

						</center>

						<div class="form-group">
							<center>
								<div class="col-xs-7">
									<br>
									<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
									<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
								</div>
							</center>
						</div>
					</form>

				</div><!--/tab-pane-->



				<div class="tab-pane" id="order">
					<form>
						<table class="table table-hove" border="1px">
							<thead class="thead-dark">

							<tr >
							
								<th>ID</th>
								<th>Tên căn hộ</th>
								<th>Địa chỉ</th>
								<th>Giá tiền</th>
								<th>image</th>
								<th>Thời gian đặt phòng</th>
								<th>Tình Trạng</th>
						<!-- 		<th>Tình trạng</th> -->
							</tr>
						</thead>
							<?php 
							
							if(isset($showOrder))
							{
								while ($result = $showOrder->fetch_assoc()) {

							?>
								<tr>
									<th scope="col">
										<?php echo $result["id"]; ?>

									</th>
									<th scope="col">
										<?php echo $result['name']; ?>
									</th>
									<th scope="col">
										<?php echo $result['district']; ?>
									</th>

									<th scope="col">

										<?php echo number_format($result['price'])." VNĐ"; ?>
									</th>
									<th scope="col">
										<img style="width: 100%;height: 100px" src="/luxstay/public/font-end/image/<?php echo $result['image']; ?>" class=" img-thumbnail" alt="avatar">
									</th>
									<th scope="col">
										<?php echo $result['date_order']; ?>
									</th>
									<th scope="col">
										<?php 
										if($result['status']==0)
										{
											echo "Chờ xử lý";
										}
										else if($result['status']==1)
										{
											echo "Đang thuê";
										}
										else
										{
											echo "Hoàn thành";
										}
										?>
									</th>
									
								</tr>
							<?php } } ?>
						</table>
					</form>
				</div>

			</div><!--/tab-pane-->
		</div><!--/tab-content-->

	</div><!--/col-9-->
</div><!--/row-->
<?php require_once __DIR__. "/../../layouts/footer.php" ;?>