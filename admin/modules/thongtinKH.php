<?php include_once '../autoload/format.php' ?>
<?php 
$fm = new Format();
?>
<?php 
session_start();
error_reporting(0);
$conn=mysqli_connect("localhost","root","","ql_homestay");
mysqli_query($conn,'SET NAMES "utf8"'); // hiển thị tiếng việt trên form
if(isset($_GET['idKH']))
{
  $id=$_GET['idKH'];
$sql="SELECT * FROM customer WHERE ID='$id'";
$kq=mysqli_query($conn,$sql);
}
?>
<?php require_once __DIR__. "/../layouts/header.php"; ?>
<div class="content">
  <div class="row">
    <div class="col-3">
      
    </div>
    <div class="col-6">

    </div>
                 <!--    <div class="col-1 d-flex">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart"><i class="fas fa-plus"></i> Giỏ hàng(<span class="total-count"></span>)</button>
                        <button class="clear-cart btn btn-primary ml-2">Clear</button>
                      </div> -->
                      <?php include 'modalCart.php' ?>

                    </div>
                    <div class="row">
                     <div class="col-12">
                      <div class="row">
                       <div class="col-12">
                        <a href="Canhodangthue.php" style="color: red; font-size: 25px;">Quay Lại</a></br></br>
                        <h2>Thông tin khách hàng đã đặt phòng</h2> </br></br>
                      </div>
                    </div>
                  </div>
                  <div align="center" >
                    <?php
                    if(isset($kq))
                    {
                      while ($result = $kq->fetch_assoc()) {
                       
                     ?>
                    
                    <ul class="list-group" style="width: 500px">
                    ID<li class="list-group-item disabled" aria-disabled="true"><?php echo $result['ID']; ?></li>
                    User Name<li class="list-group-item"><?php echo $result['username']; ?></li>
                    SĐT<li class="list-group-item"><?php echo $result['telephone']; ?></li>
                    Email<li class="list-group-item"><?php echo $result['email']; ?></li>
                    Fullname<li class="list-group-item"><?php echo $result['fullname']; ?></li>
                    </ul>
                  <?php } }?>
                   
           </div>
           <div class="row">
    

        </div>
      </div>

    </div>
  </div>
</div>
</div>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
 $(document).ready(function () {
  $('#sidebarCollapse').on('click', function () {
   $('#sidebar').toggleClass('active');
 });
});
 $(document).ready(function(){
  $('.test').tooltip({title: "Ấn enter để tìm kiếm", trigger: "focus"}); 
});
 function TienThua() {
  var x=document.getElementById("KTT").value;
  var y=document.getElementsByClassName("TongTien1");
}
</script>
<script src="js/addCart.js" >
</script>
</body>

</html>