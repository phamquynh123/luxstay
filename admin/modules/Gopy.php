<?php 
session_start();
error_reporting(0);
$conn=mysqli_connect("localhost","root","","ql_homestay");
mysqli_query($conn,'SET NAMES "utf8"'); // hiển thị tiếng việt trên form
$sql="select * from contact";
$kq=mysqli_query($conn,$sql);
$limit=$_REQUEST['SoBanGhi'];
if (isset($_REQUEST['SoBanGhi'])) {
    $limit=$_REQUEST['SoBanGhi'];
}
else{
    $limit=5;
}
$total_records=mysqli_num_rows($kq);
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$total_page = ceil($total_records / $limit);
if ($current_page > $total_page){
    $current_page = $total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}
$start = ($current_page - 1) * $limit;
$result = mysqli_query($conn, "SELECT * FROM contact LIMIT $start, $limit");
 ?>
<?php require_once __DIR__. "/../layouts/header.php"; ?>
            <div class="content">
                <div class="row">
                    <div class="col-3">
                        <b style="font-weight: 700;color: #2ab4c0;"><i class="fas fa-window-restore"></i> Quản lý Liên hệ - Góp Ý</b>
                    </div>
                 
                </div>
                <br>
                <div class="row">
                    <table class="table table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">
                                           STT
                                        </th>
                                        <th scope="col">
                                            Name
                                        </th>
                                        <th scope="col">
                                            Email 
                                        </th>
                                        <th scope="col">
                                            Address
                                        </th>
                                        <th scope="col">
                                            Tittle
                                        </th>
                                        <th scope="col">
                                            Content
                                        </th>
                                         <th scope="col">
                                            Thao tác
                                        </th>
                                    </tr>
                                </thead>
                                <?php
                                $dem=1;
                                while($row=mysqli_fetch_object($result))
                                {
                                echo "<tr class='table-primary'>";
                                echo "<td>".$dem++."</td>";
                                echo "<td>"."$row->Name"."</td>";
                                echo "<td>"."$row->Email"."</td>";
                                echo "<td>"."$row->Address"."</td>";
                                echo "<td>"."$row->Tittle"."</td>";
                                echo "<td>"."$row->Content"."</td>";
                                echo "<td>"."<img style='height: 15px !important;
        width: 15px !important;cursor: pointer;' src='..\public\icon\delete.png' onclick=window.location.href='http://localhost:8080/luxstay/admin/modules/DeleteGY.php?id=".$row->id."' >"."</td>";
                                echo "</tr>";
                                }   
                                 ?>
                            </table>
                        </div>
                        <div class="row">
                            <?php 
                                if ($current_page > 1 && $total_page > 1){
                                     echo '<a href="Gopy.php?page='.($current_page-1).'" class="btn mr-3 btn-info">Prev</a>  ';
                                    }
 
                                // Lặp khoảng giữa
                                for ($i = 1; $i <= $total_page; $i++){
                                    // Nếu là trang hiện tại thì hiển thị thẻ span
                                    // ngược lại hiển thị thẻ a
                                    if ($i == $current_page){
                                        echo '<span class="btn btn-danger mr-3">'.$i.'</span>  ';
                                    }
                                    else{
                                        echo '<a href="Gopy.php?page='.$i.'" class="btn btn-info mr-3">'.$i.'</a>  ';
                                    }
                                }
 
                                // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                                if ($current_page < $total_page && $total_page > 1){
                                    echo '<a href="Gopy.php?page='.($current_page+1).'" class="btn btn-info mr-3">Next</a>  ';
                                }
                             ?>

                           
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
    </script>
</body>
</html>