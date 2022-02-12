<?php require_once ('./view/layouts/headerGiaoVien.php');?>


      <!-- Right -->
      <div id="right">
        <div class="title">Thông tin giáo viên</div>
        <div class="entry flex">
          <img src="<?= $data['image']; ?>" class="avatar" alt="Girl in a jacket" width="200" height="200">
          <div class="information">
            <table width="100%">
              <tbody class="table">
                <tr>
                  <td width="30%">Mã giáo viên:</td>
                  <td><?= $data['magiangvien']?></td>
                </tr>
                <tr>
                  <td width="30%">Họ Tên:</td>
                  <td><?= $data['hovaten']?></td>
                </tr>
                <tr>
                  <td width="30%">Giới tính:</td>
                  <td><?= $data['gioitinh']?></td>
                </tr>
                <tr>
                  <td width="30%">Số CMND/CCCD:</td>
                  <td><?= $data['cmnd']?></td>
                </tr>
                <tr>
                  <td width="30%">Ngày sinh:</td>
                  <td><?= $data['ngaysinh']?></td>
                </tr>
                <!-- <tr>
                  <td width="30%">Bộ môn:</td>
                  <td>TT32h4</td>
                </tr>
                <tr>
                  <td width="30%">Chức vụ:</td>
                  <td>Giáo viên thục tập</td>
                </tr> -->
                <tr>
                  <td>Điện thoại:</td>
                  <td><?= $data['dienthoai']?></td>
                </tr>
                <tr>
                  <td>Email giáo viên:</td>
                  <td><?= $data['email']?></td>
                </tr>
                <tr>
                  <td>Địa chỉ:</td>
                  <td><?= $data['diachi']?></td>
                </tr>
              </tbody>
            </table>
            <button type="button" data-toggle="modal" data-target="#myModal" class="btnUpdate">Cập nhật</button>
          </div>
        </div>
      </div>

      <!-- End Right -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Cập nhật thông tin sinh viên</h4>
          </div>
          <form action="" method="POST" role="form" enctype="multipart/form-data">
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
          <table width="100%">
            <tbody class="table">
              <tr>
                <td width="30%">Ảnh:</td>
                <td> <input value="<?= $data['image']?>" name="image" type="text" id="" placeholder="Ảnh"></td>
              </tr>
              <tr>
                <td width="30%">Giới tính:</td>
                <td> <input value="<?= $data['gioitinh']?>" name="gioitinh" type="text" id="" placeholder="Giới tính"></td>
              </tr>
              <tr>
                <td width="30%">Số CMND/CCCD:</td>
                <td> <input value="<?= $data['cmnd']?>" name="cmnd" type="number" id="" placeholder="Số CMND/CCCD"></td>
              </tr>
              <tr>
                <td>Điện thoại:</td>
                <td> <input value="<?= $data['dienthoai']?>" name="dienthoai" type="number" id="" placeholder="Điện thoại"></td>
              </tr>
              <tr>
                <td>Email SV:</td>
                <td> <input value="<?= $data['email']?>" name="email" type="text" id="" placeholder="Email SV"></td>
              </tr>
              <tr>
                <td>Chỗ ở hiện nay:</td>
                <td> <input value="<?= $data['diachi']?>" name="diachi" type="text" id="" placeholder="Chỗ ở hiện nay"></td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button  class="btn btn-success" name="edit_gv">OK</button>
        </div>
      </form>

      </div>
    </div>




    <?php require_once ('./view/layouts/footer.php');?>