<div class="modal-dialog">

  <!-- Modal-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Cập nhập chuyên ngành</h4>
    </div>

    <div class="modal-body">
      <table width="100%">
        <tbody id="" class="table">
          <tr>
            <td class="modal-td" width="30%">Mã Môn:</td>
            <td class="modal-td"><input type="text" class="form-control" id="mamon" name="mamon" value="<?= $info['mamon'] ?>" readonly></td>
          </tr>
          <tr>
            <td class="modal-td" width="30%">Tên Môn</td>
            <td class="modal-td"><input type="text" class="form-control" id="tenmon" name="tenmon" value="<?= $info['tenmon'] ?>"></td>
          </tr>
          <tr>
            <td class="modal-td" width="30%">Số TC:</td>
            <td class="modal-td"><input type="text" class="form-control" id="sotinchi" name="sotinchi" value="<?= $info['sotinchi'] ?>"></td>
          </tr>

          <tr>
            <td class="modal-td" width="30%">Chuyên ngành:</td>
            <td class="modal-td">
              <select id="chuyennganh" name="chuyennganh" class="form-control">
              
                <?php foreach ($chuyennganh as $info1) { ?>
                  <option value="<?= $info1['machuyennganh'] ?>" <?php if($info['chuyennganh'] == $info1['machuyennganh']) echo 'selected';?>><?= $info1['tenchuyennganh'] ?></option>
                <?php } ?>
              </select>
            </td>
          </tr>
          <tr>
            <td class="modal-td" width="30%">Thứ:</td>
            <td class="modal-td"><select id="thu" class="form-control">
                <option>Thứ 2</option>
                <option>Thứ 3</option>
                <option>Thứ 4</option>
                <option>Thứ 5</option>
                <option>Thứ 6</option>
                <option>Thứ 7</option>
              </select></td>
          </tr>
          <tr>
            <td class="modal-td" width="30%">Ca:</td>
            <td class="modal-td"><select id="thu" class="form-control">
                <option>1-2</option>
                <option>1-3</option>
                <option>1-5</option>
                <option>6-7</option>
                <option>6-9</option>
                <option>6-10</option>
              </select></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      <button type="button" id="capnhatmonhoc" class="btn btn-success" data-dismiss="modal">Cập Nhật</button>
    </div>
  </div>


</div>

<script>
  $(document).ready(function() {
    $("#capnhatmonhoc").click(function() {
      var mamon = $("input[name='mamon']").val();
      var tenmon = $("input[name='tenmon']").val();
      var sotinchi = $("input[name='sotinchi']").val();
      var chuyennganh = $("select[name='chuyennganh']").val();
      //alert(mamon+tenmon);
      $.get("./index.php", {
        controller: "daotao",
        action: "capnhatmonhocdaotao",
        mamon: mamon,
        tenmon: tenmon,
        sotinchi: sotinchi,
        chuyennganh: chuyennganh
      }, function(data) {
        $("#info").html(data);
        alert("Cập nhật thành công");
      })
    });
  });
</script>