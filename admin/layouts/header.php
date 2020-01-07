<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
   <link rel="stylesheet" href="../public/css/style4.css">
  <!--  <link rel="stylesheet" type="text/css" href="../../public/font-end/css/bootstrap.min.css">
 -->    <!-- Font Awesome JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<!--       <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script> -->

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Luxstay</h3>
                <strong><img src="../public/Image/Logo-Final-hinh-hieu-den.png" style="width: 40px;height: 40px"></strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="../modules/TrangChu.php">
                        <i class="fas fa-home"></i>
                        Tổng quan
                    </a>
                </li>
               <!--  <li>
                    <a href="BanHang.php">
                        <i class="fas fa-store-alt"></i>
                        Bán hàng
                    </a>
                </li> -->
                <li>
                    <a href="QLHD.php">
                        <i class="fas fa-briefcase"></i>
                        Quản lý hóa đơn
                    </a>
                </li>
                <li>
                    
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Quản lý căn hộ
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="NCC.php">Thêm căn hộ</a>
                        </li>
                        <li>
                            <a href="Canhocontrong.php">Căn hộ còn trống</a>
                        </li>
                        <li>
                            <a href="Canhodangthue.php">Căn hộ đang thuê</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="BaoCao.php">
                        <i class="fas fa-image"></i>
                        Báo cáo
                    </a>
                </li>
                <?php          
                    if ($_SESSION["key"]==1) {
                        echo "<li>
                    <a href='QuanTri.php'>
                        <i class='fas fa-align-left'></i>
                        Quản trị
                    </a>
                        </li>";
                    }
                 ?>
             
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="Gopy.php" class="download">Liên hệ - Góp ý</a>
                </li>
                <li>
                    <a href="../index.html" class="article">Đăng xuất</a>
                </li>
            </ul>
        </nav>
            <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0 !important;">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                             <li class="nav-item active">
                                <a class="nav-link" href="#"><img src="../public/Image/thermometer-2.png">0<sup>0</sup>C</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><img src="../public/Image/thermometer-2.png">0<sup>0</sup>C</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><img src="../public/Image/rain-2.png">0%</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><img src="../public/Image/bell_32px.png"><span class="badge badge-pill badge-primary">Thông báo</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" ><p class="text-danger" style="font-weight: 900 !important;">SOS</p></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

     