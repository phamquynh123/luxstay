<?php 
require_once __DIR__. "/../autoload/autoload.php"; 
?>

<?php require_once __DIR__. "/../layouts/header.php" ;?>
<br><br><br><br>
<center>
	<form action="checklogin.php" class="was-validated" method="POST">
		<div class="login">
			<p><h3>Đăng nhập</h3></p>
			<p>Đăng nhập Luxstay để trải nghiệm </p>
			<div class="form-group">

				<input type="text" id="uname" name="Username" class="form-control" placeholder="Email hoặc tên đăng nhập" required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			
			<div class="form-group">
				
				<input type="password" class="form-control" name="Password" placeholder="Mật khẩu"  required >
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<!-- <input type="password" id="inputPassword5" placeholder="Mật khẩu" class="form-control" aria-describedby="passwordHelpBlock" required> -->
			
			

			<input type="submit" name="login" value="Đăng nhập" style="color: white;font-size: 20px;padding: 1%" class="borange bold">
			<br><br>

			<span>Quên mật khẩu? </span><span><a href="#">Ấn vào đây</a></span>
			<br>
			<br><span>Bạn chưa có tài khoản Luxstay?</span><span><a href="Signin.php">Đăng ký</a></span>

		</div>
	</form>
</center>
<?php require_once __DIR__. "/../layouts/footer.php" ;?>