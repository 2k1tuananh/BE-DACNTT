<div id="info"></div>
<table cellspacing="3" cellpadding="0" border="0px" width="100%">
              <tbody>
                <tr valign="top">
                  <td style="width: 100%">
                    <div>
                      <table
                        class="grid"
                        cellspacing="0"
                        border="0"
                        id="ctl00_c_GridDC"
                        style="
                          border-style: None;
                          width: 100%;
                          border-collapse: collapse;
                        "
                      >
                        <tbody>
                          <tr>
                            <th scope="col">STT</th>
                            <th scope="col" style="white-space: nowrap">
                              Mã Môn
                            </th>
                            <th scope="col">Tên Môn</th>
                            <th scope="col" style="white-space: nowrap">
                              Số TC
                            </th>
                            
                            <th scope="col">Thứ</th>
                            <th scope="col">Ca học</th>
                            <th scope="col">Trạng thái</th>

                          </tr>
                          <?php $stt=0; foreach($mon as $info){ $stt++; ?>
                          <tr>
                            <td><?= $stt ?></td>
                            <td ><?= $info['mamon'] ?></td>
                            <td><?= $info['tenmon'] ?></td>
                            <td class="item-monhoc"><?= $info['sotinchi'] ?></td>
                            
                            <td class="item-monhoc"><?= $info['thu'] ?></td>
                            <td class="item-monhoc"><?= $info['ca'] ?></td>
                            
                            <td class="item-monhoc">
                              <button class="btnTimKiem" type="button" data-toggle="modal" data-target="#SuaMonHoc">Update</button>
                              <button type="button" id="xoa<?= $stt ?>" class="btnTimKiem" >Delete</button>
                              <script>
                                $(document).ready(function(){
                                    $("#xoa<?= $stt ?>").click(function(){
                                        var mamon="<?= $info['mamon'] ?>";
                                        if (confirm("Bạn chắc chắn muốn xóa ???") == true) {
                                          $.get("./index.php",{controller:"daotao",action:"xoamon", info:mamon}, function(data) {
                                          $("#info").html(data);
                                        })  
                                        }
                                    });
                                });
                            </script>
                            </td>
                          </tr>
                          <?php }?>
                        </tbody>
                      </table>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
                            </div>