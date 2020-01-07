<?php 
    require_once __DIR__. "/../../autoload/autoload.php";
    
    $building = $db -> getPage('building',array());
    // echo "<pre>";
    // print_r($building);
    // echo "</pre>";
    // die;
    $page = $db->countAll('building',array());
    // echo $countAll; die;
?>

<?php require_once __DIR__. "/../../layouts/header.php" ;?>

<br><br><br><br>
<div class="container">
    
        <div class="row">
            <?php for($i = 0 ; $i < count($building) ; $i++){?>
            <a class="card col-sm-12 col-lg-3 col-md-6" href="order.php?id=<?php echo $building[$i]['id']; ?>" style="width: 18rem;text-decoration: none">
                <img src="/luxstay/public/font-end/image/<?php echo $building[$i]["image"] ?>" class="card-img-top" alt="...">
                <div class="card-body" style="padding: 0px;padding-top: 5%">
                    <h6 class="card-title grey"><?php echo $building[$i]["style"]; ?></h6>
                    <p class="card-text fontbold"><i class="fa fa-fire iconhot" aria-hidden="true"></i> <?php echo $building[$i]["name"]; ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="padding: 0px;padding-top: 5%"><?php echo
                     $building[$i]["numberroom"]." phòng ngủ - ".
                     $building[$i]["maxcustomer"]." khách - ".
                     $building[$i]["numberroom"]." phòng tắm" ; ?>
                        
                    </li>
                    <li class="list-group-item fontbold" style="padding: 0px;padding-top: 5%"><?php echo number_format($building[$i]["price"])."₫"; ?> / đêm</li>
                    <li class="list-group-item" style="padding: 0px;padding-top: 5%;padding-bottom: 10% "><?php echo $building[$i]["district"]; ?>
                    </li>
                </ul>
            </a>
            <!--  -->
        <?php }?>
            
        </div>
        <div class="row">
            <div class="page float-right">
                <ul>
                    <?php for ($i=1; $i <= $page['numPage'] ; $i++) {  ?>
                        <li class="btn btn-default"><a href="/luxstay/modules/Cart/page.php?page=<?php echo $i; ?>"> <?php echo $i; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    
<?php require_once __DIR__. "/../../layouts/footer.php" ;?>