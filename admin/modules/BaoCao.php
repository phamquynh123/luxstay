<?php require_once __DIR__. "/../autoload/autoload.php"
?>
<?php 
error_reporting(0);
session_start();
// $sum = 0;
// $search = getInput('search');
// $timeTruoc = getInput('ngaytruoc');
// $timeSau = getInput('ngaysau');
//    $order = $db->fetchsql("
// SELECT order_hs.id, order_hs.createddate, customer.username, building.name, building.deposit,order_hs.price 
// FROM ((order_hs 
//       INNER JOIN customer ON order_hs.customerid = customer.ID) 
//       INNER JOIN building ON order_hs.buildingid = building.id) 
//       WHERE order_hs.createddate BETWEEN CAST('".$timeTruoc."' AS DATE) AND CAST('".$timeSau."' AS DATE)");


//       var_dump($order);
  // validate cai data truyen vao theo dinh dang la yyyy-mm-dd dd/mm/yyyy
      // split dd/mm/yyyy theo ki tu /
// if (empty($search) && empty($timeTruoc) && empty($timeSau)) {
//    $order = $db->fetchsql("SELECT order_hs.id, order_hs.createddate, customer.username, building.name, building.deposit,order_hs.price
//     FROM ((order_hs
//     INNER JOIN customer ON order_hs.customerid = customer.ID)
//     INNER JOIN building ON order_hs.buildingid = building.id)
//     ;");
// }elseif(!empty($search)) {
//  $order = $db->fetchsql("SELECT order_hs.id, order_hs.createddate, customer.username, building.name, building.deposit,order_hs.price
//     FROM ((order_hs
//     INNER JOIN customer ON order_hs.customerid = customer.ID)
//     INNER JOIN building ON order_hs.buildingid = building.id)
//     WHERE customer.username LIKE '%".$search."%' ;");
// }
// else{

//     $order = $db->fetchsql("
//         SELECT order_hs.id, order_hs.createddate, customer.username, building.name, building.deposit,order_hs.price 
//         FROM ((order_hs 
//         INNER JOIN customer ON order_hs.customerid = customer.ID) 
//         INNER JOIN building ON order_hs.buildingid = building.id) 
//         WHERE order_hs.createddate BETWEEN CAST('".$timeTruoc."' AS DATE) AND CAST('".$timeSau."' AS DATE)");
// }





?>



<?php require_once __DIR__. "/../layouts/header.php"; ?>
<div class="content">
    <div class="row">
        <div class="col-3">
            <b style="font-weight: 700;color: #2ab4c0;"><i class="fas fa-window-restore"></i> Báo Cáo</b>
        </div>
        <div class="col-6">

        </div>
        <form method="POST" class="col-3" action="xuatFile.php">
            
            <button type="submit" name="export" class="btn btn-outline-primary btn-block"><i class="fas fa-plus"></i>     Xuất file mới ra excel</button>
        
        </form>
    </div>
    
    <form method="GET" action="">
        <div class="row">
            <div class="col-4">
                <label>Từ ngày</label>
                <input class="form-control" type="DATE"  name="ngaytruoc" id="example-date-input">

            </div>
            <div class="col-4">
                <label>Tới ngày</label>
                <input class="form-control" type="DATE" name="ngaysau" id="example-date-input">
                <br>
            </div>
            <div class="col-4">
                <br>    <button class="btn btn-outline-secondary" style="    margin-top: 7px;"  type="submit"><i class="fas fa-search"></i></button></div>
            </form>
            <form action="" method="GET" class="col-6">
                <label>Tìm kiếm theo tên</label>
                <div class="input-group mb-3">
                    <!-- search -->
                    <input type="text" name="search" id="searchName" class="form-control test" placeholder="Tìm kiếm theo tên." aria-label="Recipient's username">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary"  onchange="myFuntion()" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>

            </form>
        </div>

        <div class="row">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">
                            Mã hóa đơn
                        </th>
                        <th scope="col">
                            Tên khách hàng
                        </th>
                        <th scope="col">
                            Tên căn hộ
                        </th>

                        <th scope="col">
                            Tổng tiền
                        </th>
                        <th scope="col">
                            Tiền hoa hồng
                        </th>
                        <th scope="col">
                            Thời gian 
                        </th>
                  <!--       <th scope="col">
                            Thao tác
                        </th> -->
                    </tr>
                </thead>
                <?php for ($i=0; $i <count($order) ; $i++) {

                    $sum += $order[$i]['deposit'];
                    ?>
                    <tbody>
                        <tr>
                            <th scope="col">
                               <?php echo $order[$i]["id"]; ?>

                           </th>
                           <th scope="col">
                            <?php echo $order[$i]['username']; ?>
                        </th>
                        <th scope="col">
                            <?php echo $order[$i]['name']; ?>
                        </th>

                        <th scope="col">
                            <?php echo number_format($order[$i]['price'])." VNĐ"; ?>
                        </th>
                        <th scope="col">
                            <?php echo number_format($order[$i]['deposit'])." VNĐ"; ?>
                        </th>
                        <th scope="col">
                           <?php echo $order[$i]['createddate']; ?>
                       </th>
               <!--      <th scope="col">
                        Thao tác
                    </th> -->
                </tr>
            </tbody>
        <?php } ?>
        <tfoot>
            <tr>
                <td colspan="6" style="text-align: right;font-weight: bold;">
                  Tổng doanh thu:  <?php echo number_format($sum)." VNĐ"; ?></td>
              </tr>
          </tfoot>
      </table>
  </div>
  <div class="row">
                          <!--   <?php 
                                if ($current_page > 1 && $total_page > 1){
                                     echo '<a href="QLHD.php?page='.($current_page-1).'" class="btn mr-3 btn-info">Prev</a>  ';
                                    }
 
                                // Lặp khoảng giữa
                                for ($i = 1; $i <= $total_page; $i++){
                                    // Nếu là trang hiện tại thì hiển thị thẻ span
                                    // ngược lại hiển thị thẻ a
                                    if ($i == $current_page){
                                        echo '<span class="btn btn-danger mr-3">'.$i.'</span>  ';
                                    }
                                    else{
                                        echo '<a href="QLHD.php?page='.$i.'" class="btn btn-info mr-3">'.$i.'</a>  ';
                                    }
                                }
 
                                // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                                if ($current_page < $total_page && $total_page > 1){
                                    echo '<a href="QLHD.php?page='.($current_page+1).'" class="btn btn-info mr-3">Next</a>  ';
                                }
                                ?> -->

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
            function myFuntion() {
                var Name = document.getElementById('searchName').value;

            }
        </script>
    </body>
    </html>