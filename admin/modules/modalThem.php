<form action="XuLyThem.php" method="POST">
    <div class="modal" id="modalThem">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Thêm tài khoản</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <table  class="table table-hover">
                      
                        <tr>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default"style="width: 145px !important;" >Tên đăng nhập</span>
                                    </div>
                                    <input type="text" name="username"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 145px !important;">Mật khẩu</span>
                                    </div>
                                    <input type="text" type="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 145px !important;">Tên đầy đủ</span>
                                    </div>
                                    <input type="text" name="fullname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 145px !important;">Level</span>
                                    </div>
                                    <input type="text" class="form-control" name="status" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button  class="btn btn-danger">Cập nhật</button>
              </div>
          </div>
      </div>
  </div>
</form>