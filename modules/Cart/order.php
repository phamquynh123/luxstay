
 <?php require_once __DIR__. "/../../autoload/autoload.php";
 ?>
 <?php 

 $id=getInput('id');
 $building = $db -> fetchID('building',$id);
//echo $id;
//echo "id cua can ho--------".$building['id'];
//echo "id cua nguoi dung-----".$_SESSION['admin_id'];

//$insertOrder = $db->insertOrder($id);
 if(isset($_POST['orderok'])){

  $insertOrder = $db->insertOrder($id);
  $updateStatus=$db->updateStatus($id);
header('location: http://localhost:8080/luxstay/modules/Cart/profile.php');
 }
 ?>
 <?php
  if (isset($_SESSION['admin_id'])) {
    require_once __DIR__. "/../../layouts/headerCus.php";
  }else{
    require_once __DIR__. "/../../layouts/header.php";
  }?>
  
<!--Carousel Wrapper-->
<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
  <!--Slides--><br>
  <br><br><br>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100 "  style="height: 300px;" src="/luxstay/public/font-end/image/<?php echo $building['image']; ?>"
      alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"   style="height: 300px;" src="https://mdbootstrap.com/img/Photos/Slides/img%20(121).jpg"
      alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"  style="height: 300px;" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg"
      alt="Third slide">
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->
<br><br><br>
<div class="container">
  <div class="row">
    <div class="info col-sm-12 col-lg-8 col-md-6">
      <!--  -->
      <div class="header-info">
        <div class="row">
          <div class="left col-sm-12 col-lg-10 col-md-9 ">
            <h3 class="bold"><?php echo $building['name']; ?></h3>
          </div>
          <div class="right col-sm-12 col-lg-2 col-md-3">
           <div class="order-id bold">
             <p style="padding: 5px">Mã chỗ ở
              <br>
            <?php echo $building['id']; ?></p>
          </div>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="content">
     <div class="row">
      <!-- Địa chỉ -->
      <div class="col-12 margin-top">
       <img src="https://img.icons8.com/office/30/000000/worldwide-location.png"><span class="bold"> &nbsp;<?php echo $building['district']; ?></span>
     </div>
     <!-- Diện tich -->
     <div class="col-12 margin-top">
       <img src="https://img.icons8.com/office/30/000000/cottage.png"></i>
       <span class="bold">&nbsp;<?php echo $building['style']; ?> ·</span><?php echo $building['buildingarea']; ?> m<sup>2</sup>
     </div>
     <div class="col-12 margin-top">
       <span>Nguyên căn · 
        <?php echo $building['numberroom']; ?> Phòng · 
        <?php echo $building['numberroom']; ?> Giường ngủ · 
        <?php echo $building['numberroom']; ?>  Phòng ngủ · 
        <?php echo $building['maxcustomer']; ?>
         Khách (tối đa <?php echo $building['maxcustomer']+2; ?> khách)</span>
     </div>
     <br><br><br>
     <div class="intro-build col-12">
      <h4><b>Chi tiết căn hộ</b></h4>
        <?php echo $building['description']; ?>
      <!--  <p>Ma Cabane Đà Lạt là một căn nhà nhỏ nằm ở trên đồi thuộc khu đô thị mới An Sơn với khung cảnh bao quanh là các nhà kính trồng rau. Ma Cabane gồm 2 phòng ngủ ở tầng trệt và 2 phòng gác mái, sức chứa tối đa 12 người.</p>
       <p>
        Ma Cabane không dành cho ai thích sự sang trọng và hiện đại mà đem đến cho du khách cảm giác yên bình và thoải mái tận hưởng không khí trong lành ở thành phố sương mù. Mặc dù vậy Ma Cabane vẫn cung cấp đầy đủ tiện nghi cho khách như phòng tắm, bếp , máy sấy, WIfi miễn phí.
      Sân vườn rộng thoáng nhiều cây xanh, có khu vực nướng BBQ để tổ chức tiệc cho gia đình.</p>
      Có chỗ để ô tô từ 4-16 chỗ<p>
      Ma Cabane chỉ cách chợ Đà Lạt 4km, gần các địa điểm du lịch như Dinh III Bảo Đại (2 kms), Hồ Tuyền Lâm (2.9 kms), Đường hầm đất sét (10 kms)</p> -->
      <br>
    </div>
    <div class="service-order col-12">
      <h4 class="bold">Tiện nghi chỗ ở</h4>
      <p>Giới thiệu về các tiện nghi và dịch vụ tại nơi lưu trú</p>
      <h5 class="bold">Tiện ích gia đình</h5>
      <div class="servicefast1">
        <div class="row">
          <div class="left col-6">
            <img src="https://img.icons8.com/officel/40/000000/baby.png">
            <span>Phù hợp với trẻ nhỏ</span>
          </div>
          <div class="right col-6">
            <img src="https://img.icons8.com/doodle/48/000000/no-smoking--v3.png">
            <span>Không hút thuốc</span>
          </div>
        </div>
        
      </div>
      <br>
      <!--  -->
      <h5 class="bold">Tiện ích bếp</h5>
      <div class="servicefast1">
        <div class="row">
          <div class="left col-6">
            <img src="https://img.icons8.com/ultraviolet/40/000000/fridge-with-open-door.png">
            <span>Tủ lạnh</span>
          </div>
          <div class="right col-6">
           <img src="https://img.icons8.com/doodle/48/000000/gas-burner.png">
           <span>Bếp ga</span>
         </div>
       </div>
     </div>
     <br>
     <!--  -->
     <h5 class="bold">Tiện ích giải trí</h5>
     <div class="servicefast1">
      <div class="row">
        <div class="left col-6">
          <img src="https://img.icons8.com/officel/40/000000/weber.png">
          <span>BBQ</span>
        </div>
        <div class="right col-6">
          <img src="https://img.icons8.com/officel/40/000000/grass.png">
          <span>Cảnh quan đẹp</span>
        </div>
      </div>
    </div>
    <br>
    <!--  -->
    <h5 class="bold">Tiện ích bếp</h5>
    <div class="servicefast1">
      <div class="row">
        <div class="left col-3">
          <img src="https://img.icons8.com/officel/40/000000/wifi-logo.png">
          <span>Wifi</span>
        </div>
        <div class="right col-3">
         <img src="https://img.icons8.com/officel/40/000000/hair-dryer.png">
         <span>Máy sấy</span>
       </div>
       <div class="right col-3">
         <img src="https://img.icons8.com/officel/40/000000/bottle-of-water.png">
         <span>Nước khoáng</span>
       </div>
       <div class="right col-3">
         <img src="https://img.icons8.com/officel/40/000000/toilet-paper.png">
         <span>Giấy</span>
       </div>
     </div>
   </div>
   <!--  -->  
 </div>
</div>
</div>
<!--  -->
<br><br>
<div class="price-order">
  <h4 class="bold">Giá phòng</h4>
  <p>Giá có thể tăng vào cuối tuần hoặc ngày lễ</p>
  <div class="content-price-order">
    <div class="row">
      <div class="price-info col-12">
        <span class="left">Thứ hai - Thứ năm</span>
        <span class="right"><?php echo number_format( $building['price']); ?>₫</span>
      </div>
     <!--  <?php $priceT  ?> -->
      <div class="price-info col-12">
        <span class="left">Thứ sáu - Chủ nhật</span>
        <span class="right"><?php echo number_format( $building['price'] + 500000) ; ?>₫</span>
      </div>
      <div class="price-info col-12">
        <span class="left">Phí khách tăng thêm</span>
        <span class="right">150,000₫ (sau  <?php echo $building['numberroom']*2; ?> khách)</span>
      </div>
   
      <div class="price-info col-12">
        <span class="left">Số đêm tối thiểu</span>
        <span class="right">1 đêm</span>
      </div>
    </div>
  </div>
</div>
<br><br>
<!--  -->
<div class="rating-info">
 <h4 class="bold">Đánh giá</h4>
 <img class="avt-rating" src="https://img.icons8.com/bubbles/100/000000/gender-neutral-user.png">
 <span class="name-rating bold">Minh Hiếu ·</span>
 <span class="date-rating">2 days</span>
 <p>Chủ nhà dễ thương lắm. Nhà lại đẹp và rộng nữa chứ. Tầng cao view cực kỳ đẹp luôn</p>
</div>
<!--  -->
<br>
<br>
<div class="LuuY">
  <h4 class="bold"> <img src="https://img.icons8.com/cute-clipart/64/000000/ball-point-pen.png"> Lưu ý đặc biệt</h4>
  <p class="bold">CHECK IN: 14PM // CHECK OUT: 12PM</p>

  <p class="bold"> VUI LÒNG KHÔNG THỰC HIỆN NHỮNG ĐIỀU SAU:</p>
  <p><img src="https://img.icons8.com/dusk/64/000000/1.png"> XIN TẮT HẾT CÁC THIẾT BỊ ĐIỆN TRƯỚC KHI ĐI RA NGOÀI.</p>
  <p><img src="https://img.icons8.com/dusk/64/000000/2.png"> Không hút thuốc trong nhà (có thể hút ngoài ban công)</p>
  <p><img src="https://img.icons8.com/dusk/64/000000/3-circle--v1.png"> Không tiệc tùng</p>
  <p><img src="https://img.icons8.com/dusk/64/000000/4-circle.png"> Không sử dụng chất kích thích</p>
  <p><img src="https://img.icons8.com/dusk/64/000000/5-circle.png"> Không thú nuôi</p>
</div>
<br>
<div class="time-nhanphong">
 <h4 class="bold">Thời gian nhận phòng</h4>
 <div class="time-nhanphong1">
  <div class="row">
    <div class="time-nhanphong2 col-12">
      <span class="left">Nhận phòng</span>
      <span class="right">02:00 PM</span>
    </div>
    <div class="time-nhanphong2 col-12">
      <span class="left">Trả phòng</span>
      <span class="right">12:00 PM</span>
    </div>

  </div>
</div>
</div>
<!--  -->
</div>
<!--  -->
<div class="order col-sm-12 col-lg-4 col-md-6">
  <div class="row">
    <div class="order-money col-12">
      <h4 class="bold ta-center">ORDER</h4>
     <!--   echo number_format( $building['price'] + 1050000); ₫ /1 đêm -->
    </div>

    <div class="order-customer col-12 margin-top">
      <select id="mySelect" onchange="myFuntion()" class="custom-select">
        <option >Số lượng khách</option>
    <?php for ($i=1; $i <= $building['maxcustomer'] + 2; $i++) { 
       echo " <option value='$i'>$i khách</option>";
       } ?>
      
      </select>

    </div>
    <br><br><br>
    <!--  -->
   <form class="col-12" action="" method="POST">
      <div class="order-price col-12">
      <span class="left">Giá thuê 1 đêm</span>
      <input type="hidden" name="customerid" value="<?php echo $_SESSION['admin_id'] ;?>">
      <span class="right"><?php echo number_format( $building['price'] ); ?>₫</span>
    </div>
    <br><br>
    <div class="order-price col-12">

            <input type="hidden" name="buildingid" value="<?php echo $id ;?>">
      <span class="left">Phí dọn dẹp
      </span>
      <span class="right">500,000₫</span>
    </div>
    <br><br>
    <div class="order-price col-12">
      <span class="left">Phí dịch vụ
      </span>
      <span class="right">550,000₫</span>
    </div>
    <br><br>
    <div class="order-price col-12 bold">
      <span class="left">Tổng tiền

      </span>
      <input type="hidden" name="price" id="priceOrder">
      <span class="right" id="inner"></span>
    </div>
    <br><br>
    <div class="order-button col-12">
      <button name="orderok">Đặt ngay</button>
      
    </div>
   </form>
  </div>
</div>

</div>

</div>
<!-- <script type="text/javascript">
  function myFuntion() {
    var tongtien;
    var tien=<?php echo  $building['price'] + 1050000;?>;
    var nguoithua;
    var songuoi;
    var max = <?php echo $building['maxcustomer'];?>;
    var select = document.getElementById('mySelect').value;
    var upPrice = document.getElementById('priceOrder').value;
    if ( select > max ) {
      nguoithua= select - max; 
      tongtien= tien + (nguoithua*150000);
      console.log(max);
    }else{
      tongtien= tien;
    }
    document.getElementById('inner').innerHTML=tongtien;
    document.getElementById('priceOrder').value=tongtien;
  }


</script> -->



<?php require_once __DIR__. "/../../layouts/footer.php" ;?>
