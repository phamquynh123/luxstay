
<?php
require_once __DIR__. "/../autoload/autoload.php"; 

$data = array(
	"username"=>postInput('username'),
	"email"=>postInput('Email'),
	"password"=>postInput('password'),
	"telephone"=>postInput('Telephone')
);

if (($data["username"]!="")  ) {
	$db -> insert('customer',$data); 
	echo "<script type='text/javascript'>alert('Đăng ký thành công');</script>" ;
}
?>
<?php require_once __DIR__. "/../layouts/header.php" ;?>
<br><br><br>
<center>
	<form   method="POST" class="was-validated">
		<div class="login">
			<p><h3>Đăng ký</h3></p>
			<p>Đăng ký Luxstay để trải nghiệm </p>

			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Tên đăng nhập" required >
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			
			<div class="form-group">
				<input type="email" name="Email" class="form-control" placeholder="Email@abc.com" required >
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
				
			<div class="form-group">
					<input type="password" id="inputPassword5" name="password" placeholder="Mật khẩu" class="form-control" aria-describedby="passwordHelpBlock" required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>

		<div class="form-group">
					<input type="text" name="Telephone" class="form-control" maxlength="10" minlength="9" placeholder="Số điện thoại" required >
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
				<p class="check-tele"></p>
			</div>

			
			
			
			<div class="form-group form-check" style="text-align: left;
			width: 70%;padding-left: 0;position: inherit;">
			<label class="form-check-label">
				<input class="form-check-input" style="    width: 30%;"  type="checkbox" name="remember" required> Tôi đã đọc điều khoản 


			</label>
		</div>
		<input type="submit" name="btnok" value="Đăng ký" style="color: white;font-size: 20px;padding: 1%" class="borange bold">
		<br><br>


	</div>
</form>
</center>


<?php require_once __DIR__. "/../layouts/footer.php" ;?>