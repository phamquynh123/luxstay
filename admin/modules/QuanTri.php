<?php 
session_start();
error_reporting(0);
$conn=mysqli_connect("localhost","root","","ql_homestay");
mysqli_query($conn,'SET NAMES "utf8"'); // hiển thị tiếng việt trên form
$sql="select * from user";
$kq=mysqli_query($conn,$sql);
?>
<?php require_once __DIR__. "/../layouts/header.php"; ?>
<div class="content">
    <div class="row">
        <div class="col-3">
            <b style="font-weight: 700;color: #2ab4c0;"><i class="fas fa-users-cog"></i> QUẢN TRỊ</b>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="dropdown">
                <a class="btn btn-info btn-block dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sắp xếp 
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Tên</a>
                    <a class="dropdown-item" href="#">Cấp độ</a>
                </div>
            </div>
        </div>
        <div class="col-2">
            <a type="button" href="QuanTri.php" class="btn btn-info btn-block" ><i class="fas fa-sync-alt"></i> Làm mới</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th>
                        STT
                    </th>
                    <th>
                        User
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Level
                    </th>
                    <th>
                        Thao tác
                    </th>
                </tr>
            </thead>
            <?php
            while ($row=mysqli_fetch_object($kq)) {
                echo "<tr>";
                echo "<td>".$row->id."</td>";
                echo "<td>".$row->username."</td>";
                echo "<td>".$row->fullname."</td>"; 
                echo "<td>".$row->status."</td>";
                echo "<td>";
                echo"<img style='height: 15px !important;
                width: 15px !important;cursor: pointer;' src='..\public\icon\add.png' data-toggle='modal' data-target='#modalThem' >

                 |<img style='height: 15px !important;
                width: 15px !important;cursor: pointer;' src='..\public\icon\Pencil-icon.png' data-toggle='modal' data-target='#modalSua'   > 

                | <img style='height: 15px !important;
                width: 15px !important;cursor: pointer;' src='..\public\icon\delete.png' onclick=window.location.href='http://localhost:8080/luxstay/admin/modules/Delete.php?id=".$row->id."' >";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <!-- Modal Thêm, sửa xóa -->
        <?php 
        include 'modalThem.php';
        include 'modalSua.php';
        ?>
        <!-- end modal Thêm, sửa, xóa -->
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