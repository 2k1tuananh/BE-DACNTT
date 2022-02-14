<table cellspacing="3" cellpadding="0" border="0px" width="100%">
              <tbody>
                <tr valign="top">
                  <td style="width: 100%">
                    <div id="bangdiem1">
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
                          <tr class="text-center">
                            <th scope="col">STT</th>
                            <th scope="col">Mã Giáo Viên</th>
                            <th scope="col">Tên Giáo Viên</th>
                            <th scope="col">Trạng thái</th>

                            <th scope="col">Hành động</th>
                           
                          </tr>
                          <tr>
                          <?php if($listGiangVien!= '') 
                          {
                            $stt=0; foreach ($listGiangVien as $info){ $stt++;?>
                              <td class="text-center"><?= $stt?></td>
                              <td class="text-center"><?= $info['magiangvien']?></td>
                              
                              <td class="text-center"><?= $info['hovaten']?></td>
                              <td class="text-center">
                              <script>
                                $(function(){
                                    $('#trangthai<?= $stt?>').trigger('change'); //This event will fire the change event. 
                                        $('#trangthai<?= $stt?>').change(function(){
                                            var data="<?= $info['magiangvien']?>";
                                            var data2= $(this).val();
                                            var thongbao="Cập nhật thành công";
                                            alert(thongbao);
                                            $.get("./index.php",{controller:"daotao",action:"capnhattheotrangthai1", magiangvien:data, trangthai:data2}, function(data) {
                                        })                                                                                     
                                    });
                                });
                                </script>
                                <select id="trangthai<?= $stt?>">
                                    <?php if($info['trangthai']==1){?>
                                    <option>Đang dạy</option>
                                    <option>Đã nghỉ</option>
                                    <?php } else{?>
                                    <option>Đã nghỉ</option>
                                    <option>Đang dạy</option>
                                    <?php } ?> 
                                </select>
                              </td>
                              <td class="text-center">
                                <Button class="btn" type="btnTimKiem" data-toggle="modal"
                                  data-target="#myModal1">Xem Chi Tiêt</Button>
                                  &nbsp;
                                </td>
                            </tr><?php } ?>
                          
                          <?php  }?>
                        </tbody>
                      </table>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>