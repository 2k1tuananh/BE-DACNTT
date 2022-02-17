<div class="modal-dialog">

  <!-- Modal-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Cập nhập sinh viên </h4>
    </div>

    <div class="modal-body">
    <table width="100%">
                        <tbody class="table">
                            <tr>
                            <tr>
                                <td class="modal-td" width="30%">Mã Sinh Viên:</td>
                                <td class="modal-td">
                                    <input id="masinhvien" name="masinhvien" class="form-control" type="text" value="<?= $svid['masinhvien'] ?>" readonly />
                                </td>
                            </tr>
                            <tr>
                                <td class="modal-td" width="30%">Họ và tên:</td>
                                <td class="modal-td">
                                    <input id="hovaten" name="hovaten" class="form-control" type="text" value="<?= $svid['hovaten'] ?>" />
                                </td>
                            </tr>
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
                                <td class="modal-td"><input value="<?= $svid['cmnd'] ?>" type="text" class="form-control" name="CMND" id="CMND"></td>
                            </tr>
                            <tr>
                                <td class="modal-td" width="30%">Ngày sinh:</td>
                                <td class="modal-td">
                                    <input class="form-control" type="date" id="ngaysinh" name="ngaysinh" value="<?= date($svid['ngaysinh']) ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td class="modal-td">Điện thoại:</td>
                                <td class="modal-td"><input type="text" class="form-control" id="phone" value="<?= $svid['dienthoai'] ?>" name="phone"></td>
                            </tr>
                            <tr>
                                <td class="modal-td">Email SV:</td>
                                <td class="modal-td"><input type="text" class="form-control" value="<?= $svid['email'] ?>" name="email" id="email" readonly></td>
                            </tr>
                            <tr>
                                <td class="modal-td">Mật khẩu:</td>
                                <td class="modal-td"><input type="text" class="form-control" value=" <?= $svid['password'] ?>" name="password" id="password"></td>
                            </tr>
                            <tr>
                                <td class="modal-td">Lớp:</td>
                                <td class="modal-td">
                                    <select class="form-control" id="lop" name="lop">
                                        <option value="">Chọn lớp</option>
                                        <?php foreach ($listLopCN as $infoCN) {
                                            if ($svid['lop'] == $infoCN['malop'])
                                                echo '<option value="' . $infoCN['malop'] . '" selected>' . $infoCN['tenlop'] . '</option>';
                                            else
                                                echo '<option value="' . $infoCN['malop'] . '">' . $infoCN['tenlop'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="modal-td">Chuyên Ngành:</td>
                                <td class="modal-td">
                                    <select class="form-control" id="chuyennganh" name="chuyennganh">
                                        <option value="">Chọn chuyên ngành</option>
                                        <?php foreach ($listCN as $infoCN) {
                                            if ($svid['chuyennganh'] == $infoCN['machuyennganh'])
                                                echo '<option value="' . $infoCN['machuyennganh'] . '" selected>' . $infoCN['tenchuyennganh'] . '</option>';
                                            else
                                                echo '<option value="' . $infoCN['machuyennganh'] . '">' . $infoCN['tenchuyennganh'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="modal-td">Giáo viên CN:</td>
                                <td class="modal-td">
                                    <select class="form-control" id="giaovien" name="giaovien">
                                    <option value="">Chọn giáo viên</option>

                                    <?php foreach ($listGVCN as $infoCN) {
                                            if ($svid['GVCN'] == $infoCN['magiangvien'])
                                                echo '<option value="' . $infoCN['magiangvien'] . '" selected>' . $infoCN['hovaten'] . '</option>';
                                        }
                                        ?>

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="modal-td">Địa chỉ hộ khẩu:</td>
                                <td class="modal-td">
                                    <input type="text" value="<?= $svid['diachi'] ?>" class="form-control" name="diachi" id="diachi">

                                </td>
                            </tr>

                        </tbody>
                    </table>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      <button type="button" id="capnhatsinhvien" class="btn btn-success" data-dismiss="modal">Cập Nhật</button>
    </div>
  </div>


</div>
<script>
              $(document).ready(function() {
                $('#chuyennganh').on('change', function() {
                  var machuyennganh = $(this).val();
                  const url = $(this).attr("action");
                  if (machuyennganh) {
                    $.ajax({
                      type: 'POST',
                      url,
                      data: 'machuyennganh=' + machuyennganh,
                      success: function(html) {
                        $('#giaovien').html(html);
                      }
                    });
                  } else {
                    $('#giaovien').html('<option value="">Chọn giáo viên </option>');

                  }
                });


              });
            </script>
<script>
    
  $(document).ready(function() {
    $("#capnhatsinhvien").click(function() {
      var masinhvien = $("input[name='masinhvien']").val();
      var hovaten = $("input[name='hovaten']").val();
      var gioitinh = $("select[name='gioitinh']").val();
      var chuyennganh = $("select[name='chuyennganh']").val();
      var lop = $("select[name='lop']").val();
      var giaovien = $("select[name='giaovien']").val();
      var CMND = $("input[name='CMND']").val();
      var ngaysinh = $("input[name='ngaysinh']").val();
      var phone = $("input[name='phone']").val();
      var email = $("input[name='email']").val();
      var password = $("input[name='password']").val();
      var diachi = $("input[name='diachi']").val();
      //alert(mamon+tenmon);
      $.get("./index.php", {
        controller: "daotao",
        action: "capnhatsinhviendaotao",
        masinhvien: masinhvien,
        hovaten: hovaten,
        gioitinh: gioitinh,
        chuyennganh: chuyennganh,
        lop:lop,
        giaovien:giaovien,
        CMND: CMND,
        ngaysinh: ngaysinh,
        phone:phone,
        email:email,
        password:password,
        diachi:diachi
      }, function(data) {
        $("#info").html(data);
        alert("Cập nhật thành công");
      })
    });
  });
</script>