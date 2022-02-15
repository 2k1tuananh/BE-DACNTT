<?php if ($_SESSION['role_id'] == "2") {
  require_once('./view/layouts/headerGiaoVien.php');
} else {
  require_once('./view/layouts/headerDaoTao.php');
}
if ($_SESSION['role_id'] == "1") {
  require_once("./view/sinhvien/ThongTinCaNhan.php");
} ?>

<style>
  .modal-td {
    padding: 10px;
  }

  .btnTimKiem {
    z-index: 1;
    position: relative;
    font-size: inherit;
    font-family: inherit;
    color: white;
    padding: 0.5em 1em;
    outline: none;
    border: none;
    background-color: hsl(236, 32%, 26%);
    overflow: hidden;
    transition: color 0.4s ease-in-out;
  }

  .btnTimKiem::before {
    content: '';
    z-index: -1;
    position: absolute;
    top: 100%;
    right: 100%;
    width: 1em;
    height: 1em;
    border-radius: 50%;
    background-color: #05c20f;
    transform-origin: center;
    transform: translate3d(50%, -50%, 0) scale3d(0, 0, 0);
    transition: transform 0.45s ease-in-out;
  }

  .btnTimKiem:hover {
    cursor: pointer;
    color: #161616;
  }

  .btnTimKiem:hover::before {
    transform: translate3d(50%, -50%, 0) scale3d(15, 15, 15);
  }
</style>
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
            <td><?= $data['magiangvien'] ?></td>
          </tr>
          <tr>
            <td width="30%">Họ Tên:</td>
            <td><?= $data['hovaten'] ?></td>
          </tr>
          <tr>
            <td width="30%">Giới tính:</td>
            <td><?= $data['gioitinh'] ?></td>
          </tr>
          <tr>
            <td width="30%">Số CMND/CCCD:</td>
            <td><?= $data['cmnd'] ?></td>
          </tr>
          <tr>
            <td width="30%">Ngày sinh:</td>
            <td><?= $data['ngaysinh'] ?></td>
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
            <td><?= $data['dienthoai'] ?></td>
          </tr>
          <tr>
            <td>Email giáo viên:</td>
            <td><?= $data['email'] ?></td>
          </tr>
          <tr>
            <td>Địa chỉ:</td>
            <td><?= $data['diachi'] ?></td>
          </tr>
        </tbody>
      </table>
      <button style="color: white;" type="button" data-toggle="modal" data-target="#myModal" class="btnTimKiem btn">Cập nhật</button>
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
                <td class="modal-td" width="30%">Ảnh:</td>
                <td class="modal-td"> <input class="form-control" value="<?= $data['image'] ?>" name="image" type="text" id="" placeholder="Ảnh"></td>
              </tr>
              <tr>
                <td class="modal-td" width="30%">Giới tính:</td>
                <td class="modal-td"> 
                <select class="form-control" id="gioitinh" name="gioitinh">
                                    <option value="Nam" <?php if ($svid['gioitinh'] == 'Nam') {
                                                            echo ' selected';
                                                        } ?>>Nam</option>
                                    <option value="Nữ" <?php if ($svid['gioitinh'] == 'Nữ') {
                                                            echo ' selected';
                                                        } ?>>Nữ</option>
                                </select>
                </td>
              </tr>
              <tr>
                <td class="modal-td" width="30%">Số CMND/CCCD:</td>
                <td class="modal-td"> <input class="form-control" value="<?= $data['cmnd'] ?>" name="cmnd" type="number" id="" placeholder="Số CMND/CCCD"></td>
              </tr>
              <tr>
                <td class="modal-td">Điện thoại:</td>
                <td class="modal-td"> <input class="form-control" value="<?= $data['dienthoai'] ?>" name="dienthoai" type="number" id="" placeholder="Điện thoại"></td>
              </tr>
              <tr>
                <td class="modal-td">Email SV:</td>
                <td class="modal-td"> <input class="form-control" value="<?= $data['email'] ?>" name="email" type="text" id="" placeholder="Email SV"></td>
              </tr>
              <tr>
                <td class="modal-td">Chỗ ở hiện nay:</td>
                <td class="modal-td"> <input class="form-control" value="<?= $data['diachi'] ?>" name="diachi" type="text" id="" placeholder="Chỗ ở hiện nay"></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button class="btn btn-success" name="edit_gv">OK</button>
        </div>
      </form>

    </div>
  </div>