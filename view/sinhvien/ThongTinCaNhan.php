<?php require_once ('./view/layouts/headerSinhVien.php');?>


<div id="right">
  <div class="title">Thông tin sinh viên</div>
  <div class="entry flex">
  <?php if ($data['image']) { ?>
    <img src="<?= $data['image']; ?>" class="avatar" alt="Avatar" width="200" height="200">
<?php } else { ?>
    <img src="https://img.wattpad.com/8f19b412f2223afe4288ed0904120a48b7a38ce1/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f5650722d38464e2d744a515349673d3d2d3234323931353831302e313434336539633161633764383437652e6a7067?s=fit&w=720&h=720" class="avatar" alt="Avatar" width="200" height="200">
    <?php } ?>
    <div class="information">
    <table width="100%">
      <tbody class="table">
        <tr>
          <td width="30%">Mã sinh viên:</td>
          <td><?= $data['masinhvien']?></td>
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
        <tr>
          <td width="30%">Lớp:</td>
          <td><?= $data['lop']?></td>
        </tr>
        <tr>
          <td width="30%">Giáo viên chủ nhiệm:</td>
          <td><?= $data['hvt']?></td>
        </tr>
        <tr>
          <td>Điện thoại:</td>
          <td><?= $data['dienthoai']?></td>
        </tr>
        <tr>
          <td>Email SV:</td>
          <td><?= $data['email']?></td>
        </tr>
        <tr>
          <td>Chỗ ở hiện nay:</td>
          <td><?= $data['diachi']?></td>
        </tr>
      </tbody>
    </table>
    <button type="button" data-toggle="modal" data-target="#myModal" class = "btnUpdate">Update</button>
  </div>
</div>
</div>
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
                <td style="padding: 10px;font-size: 16px;" width="30%">Ảnh:</td>
                <td style="padding: 10px;font-size: 16px;"> <input value="<?= $data['image']?>" name="image" type="text" id="" placeholder="Ảnh"></td>
              </tr>
              <tr>
                <td style="padding: 10px;font-size: 16px;" width="30%">Giới tính:</td>
                <td style="padding: 10px;font-size: 16px;"> <input value="<?= $data['gioitinh']?>" name="gioitinh" type="text" id="" placeholder="Giới tính"></td>
              </tr>
              <tr>
                <td style="padding: 10px;font-size: 16px;" width="30%">Số CMND/CCCD:</td>
                <td style="padding: 10px;font-size: 16px;"> <input value="<?= $data['cmnd']?>" name="cmnd" type="text" id="" placeholder="Số CMND/CCCD"></td>
              </tr>
              <tr>
                <td style="padding: 10px;font-size: 16px;">Điện thoại:</td>
                <td style="padding: 10px;font-size: 16px;"> <input value="<?= $data['dienthoai']?>" name="dienthoai" type="text" id="" placeholder="Điện thoại"></td>
              </tr>
              <tr>
                <td style="padding: 10px;font-size: 16px;">Email SV:</td>
                <td style="padding: 10px;font-size: 16px;"> <input value="<?= $data['email']?>" name="email" type="email" id="" placeholder="Email SV" ></td>
              </tr>
              <tr>
                <td style="padding: 10px;font-size: 16px;">Chỗ ở hiện nay:</td>
                <td style="padding: 10px;font-size: 16px;"> <input value="<?= $data['diachi']?>" name="diachi" id="" placeholder="Chỗ ở hiện nay"></td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
          <button  class="btn btn-primary" name="edit_sv">OK</button>
        </div>
      </form>
    </div>
    
  </div>
</div>
<!-- End Right -->
    <?php require_once ('./view/layouts/footer.php');?>