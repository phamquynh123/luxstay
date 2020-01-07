<?php include_once '../autoload/format.php' ?>
<?php 
$fm = new Format();
?>
<?php 
session_start();
error_reporting(0);
$conn=mysqli_connect("localhost","root","","ql_homestay");
mysqli_query($conn,'SET NAMES "utf8"'); // hiển thị tiếng việt trên form
$sql="SELECT order_hs.*,building.name,building.district,customer.username
        FROM order_hs INNER JOIN building ON order_hs.buildingid = building.id 
        INNER JOIN customer ON order_hs.customerid = customer.ID ORDER BY order_hs.id DESC";
$kq=mysqli_query($conn,$sql);
if(isset($_GET['xulyid']))
{
  $id =$_GET['xulyid'];
  $query="UPDATE order_hs SET status=1 WHERE id='$id'";
  $result=mysqli_query($conn,$query);
  header('Location: Canhodangthue.php');
}

if(isset($_GET['shiftid']))
{
  $id =$_GET['shiftid'];
 $query="UPDATE order_hs SET status=2 WHERE id='$id'";
  $result=mysqli_query($conn,$query);
   $query2="UPDATE building SET status=0 WHERE id='".$_GET['buiId']."'";
   $result2=mysqli_query($conn,$query2);
  header('Location: Canhodangthue.php');

  // echo "ttttttttttt-".$id."---".$a;
  // $query="UPDATE order_hs SET status=2 WHERE id='$id'";
  // $query2="UPDATE building SET status=0 WHERE id='$a'";
  // //echo "Test-".$id."--".$_GET['buiId'];
  // $result=mysqli_query($conn,$query);
  // $result2=mysql_query($conn,$query2);
  

}

?>
<?php require_once __DIR__. "/../layouts/header.php"; ?>
<div class="content">
  <div class="row">
    <div class="col-3">
      <b style="font-weight: 700;color: #2ab4c0;">Căn hộ đang cho thuê</b>
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
                        <div class="input-group mb-3">
                         <!-- seach -->
                         <input type="text" class="form-control test" placeholder="Tìm kiếm theo tên, mã vạch, mã hàng hóa." aria-label="Recipient's username" aria-describedby="button-addon2">
                         <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                   <table class="table table-hover">
                    <thead class="thead-dark">
                     <tr>
                      <th scope="col" >
                       STT
                     </th>
                     <th scope="col">
                       Name
                     </th>
                     <th scope="col">
                       District
                     </th>
                     
                     <th scope="col">
                       Price
                     </th>
                  
              
                   <th scope="col">
                     Img
                   </th>
                   <th scope="col">
                     User KH
                   </th>
                   <th scope="col">
                     Chi tiết KH
                   </th>
                   <th scope="col">
                     Thời gian xử lý
                   </th>
                   <th scope="col">
                     Trạng thái
                   </th>
                 </tr>
               </thead>
              <thead class="thead-dark">
                <?php 
                if(isset($kq))
                {
                  $i=0;
                  while ($result = $kq->fetch_assoc()) {
                    $i++;
                  
                 ?>
                
               <tr>
                 <td><?php echo $i; ?></td>
                 <td><?php echo $result['name'] ?></td>
                 <td><?php echo $result['district'] ?></td>
                 
                 <td><?php echo $result['price'] ?></td>
                 
                  
                  <td><img style="width: 100%;height: 100px" src="/luxstay/public/font-end/image/<?php echo $result['image']; ?>" class=" img-thumbnail" alt="avatar"></td>
                  <td><?php echo $result['username'] ?></td>
                  <td><a href="thongtinKH.php?idKH=<?php echo $result['customerid'] ?>">Chi tiết KH</a></td>
                  <td><?php echo $result['date_order'] ?></td>
                 <td>
                  <?php
                  if($result['status']==0)
                  {?>
                    <a href="?xulyid=<?php echo $result['id'] ?>" style="color: red;font-weight:bolder;">Chờ xử lý</a>
                  <?php }
                  else if($result['status']==1)
                  {?>
                    <a href="?shiftid=<?php echo $result['id'] ?>&buiId=<?php echo $result['buildingid'] ?>"  style="color: #044d63;font-weight:bolder;">Đang cho thuê</a>
                 <?php  }
                  else
                  {?>
                    <p style="color: #067518;font-weight:bolder;">Hoàn Thành</p>
                    <?php

                  }
                 ?></td>
               </tr>
             <?php } }?>
               </thead>
             </table>
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
