<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "ql_homestay");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT order_hs.id, order_hs.createddate, customer.username, building.name, building.deposit,order_hs.price
    FROM ((order_hs
    INNER JOIN customer ON order_hs.customerid = customer.ID)
    INNER JOIN building ON order_hs.buildingid = building.id)
    ;";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Mã hóa đơn</th>  
                         <th>Tên khách hàng</th>  
                         <th>Tên căn hộ</th>  
       <th>Tổng tiền</th>
        <th>Tiền hoa hồng</th>
       <th>Thời gian</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["username"].'</td>  
                         <td>'.$row["name"].'</td>  
       <td>'.$row["price"].'</td>  
       <td>'.$row["deposit"].'</td>
       <td>'.$row["createddate"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>