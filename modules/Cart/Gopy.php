
<?php require_once __DIR__. "/../../layouts/header.php" ;?>
<br><br><br>
<?php
require_once __DIR__. "/../../autoload/autoload.php"; 
	$data = array(
		"Name"=>postInput('Name'),
		"Email"=>postInput('Email'),
		"Address"=>postInput('Address'),
		"Tittle"=>postInput('Tittle'),
		"Content"=>postInput('Content')

	);

	if ( $data["Name"] != "") {
		$db -> insert('contact',$data);
		echo "<script type='text/javascript'>alert('Góp ý thành công! Cảm ơn bạn đã đòng góp ý kiến!');</script>";
	}
	?>

<center>
	<form  method="POST">
			<div class="login">
			<p><h3>Góp ý</h3></p>
			<p>Hoàn thiện Luxstay ngày một vững mạnh </p>
			<input type="text" name="Name" class="form-control" placeholder="Họ và tên" required>
			<br>
			<!-- <input type="password" id="inputPassword5" placeholder="Mật khẩu" class="form-control" aria-describedby="passwordHelpBlock" required> -->
			<input type="email" name="Email" class="form-control" placeholder="Email" required>
			<br>
			<input type="text" name="Address" class="form-control" placeholder="Địa chỉ" required>
			<br>
			<input type="text" name="Tittle" class="form-control" placeholder="Tiêu đề" required>
		
			<br>
			<textarea name="Content" class="form-control" style="width: 70%;height: 100px" >Nội dung</textarea>
			<label name="lebel"></label>
			<br>
			<form>
  <div class="form-group">
    <input type="file" name="zipgy" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
			<input type="submit" name="gopy" value="Gửi" style="color: white;font-size: 20px;padding: 1%" class="borange bold">
			<br><br>
		
		</div>
		</form>
</center>
<?php require_once __DIR__. "/../../layouts/footer.php" ;?>
