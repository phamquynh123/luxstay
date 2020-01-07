<?php 
session_start();

?>
<?php require_once __DIR__. "/../layouts/header.php"; ?>
<div class="content">
    <div class="row">
        <div class="col-3">
            <b style="font-weight: 700;color: #2ab4c0;"><i class="fas fa-window-restore"></i> Thêm căn hộ</b>
        </div>        
    </div>
</div>
<br>
<form  action="AddProduct.php" method="post" enctype="multipart/form-data" style="border: 1px solid;padding: 2%;">
    <table class="form" style="width: 100%">

        <tr>
            <td>
                <label>Tên sản phẩm</label>
            </td>
            <td>
                <input type="text" name="productName" required placeholder="Enter Product Name ..." class="medium" />
            </td>
        </tr>
     

        <tr>
            <td>
                <label>District</label>
            </td>
            <td>
               <input type="text" name="district" required placeholder="Enter District Name ..." class="medium" />
            </td>
        </tr>
        <tr>
            <td>
                <label>Style</label>
            </td>
            <td>
                <select id="select" required name="style">
                    <option>---Chọn kiểu căn hộ---</option>
                    <option value="Căn hộ chung cư">Căn hộ chung cư</option>
                    <option value="Studio">Studio</option>
                    <option value="Biệt thự">Biệt thự</option>
                    <option value="Nhà riêng">Nhà riêng</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>
                <label>Area</label>
            </td>
            <td>
                <input type="text" required name="area" placeholder="Enter Product Name..." class="medium" />
            </td>
        </tr>
        <tr>
            <td>
                <label>Number of room</label>
            </td>
            <td>
                <select multiple size="2" required class="custom-select"  name="room">
                    <option selected>Số lượng phòng</option>
                      <?php for ($i=1; $i <=20 ; $i++) { 
                        echo "<option value='$i'> $i </option>";
                    } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label>Max adult</label>
            </td>
            <td>
                <select multiple size="2" required  class="custom-select" name="customer">
                   <option selected>Số lượng người</option>
                    <?php for ($i=1; $i <=20 ; $i++) { 
                        echo "<option value='$i'> $i  </option>";
                    } ?>
                </select>
            </td>
        </tr>

        <tr>
            <td style="vertical-align: top; padding-top: 9px;">
                <label>Description</label>
            </td>
            <td>
                <textarea name="description" id="tinymce" class="form-control" required ></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label>Price</label>
            </td>
            <td>
                <input type="text" name="price" required placeholder="Enter Price..." class="medium" />
            </td>
        </tr>
        <tr>
            <td>
                <label>Deposit</label>
            </td>
            <td>
                <input type="text" required name="deposit" placeholder="Enter Deposit..." class="medium"  title="Tiền hoa hồng" />
            </td>
        </tr>

        <tr>
            <td>
                <label>Upload Image</label>
            </td>
            <td>
                <input required type="file" name="image"  />
            </td>
        </tr>

       <!--  <tr>
            <td>
                <label>Product Type</label>
            </td>
            <td>
                <select id="select" name="type">
                    <option>Select Type</option>
                    <option value="0">Featured</option>
                    <option value="1">Non-Featured</option>
                </select>
            </td>
        </tr> -->

        <tr>
            <td></td>
            <td>
                <input type="submit" name="Upload" Value="Thêm" />
            </td>
        </tr>
    </table>
</form>

</div>

<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
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
</html>0