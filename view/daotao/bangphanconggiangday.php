
            <div id="capnhat">
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
                          <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Mã Môn</th>
                            <th scope="col">Tên Môn</th>
                            <th scope="col">Giáo Viên</th>
                            <th scope="col"></th>
                          </tr>
                          <tr>
                          <?php $stt=0; 
                          if($listMonHoc != ''){
                          foreach ($listMonHoc as $info){ $stt++;?>
                          
                            <td><?= $stt?></td>
                            <td class="mamon<?= $stt ?>" id="<?= $info['mamon'] ?>" name="mamon"><?= $info['mamon']?></td>
                            <td class="tenmon<?= $stt ?>" id="<?= $info['tenmon'] ?>" name="tenmon"><?= $info['tenmon']?></td>
                            <td >
                              <select class="form-control" style="width: 50%"  id="magiangvien<?= $stt?>"  >
                              <option value="<?= $info['magiangvien'] ?>"><?= $info['hovaten']?></option>
                                <?php
                                  foreach($listGiangVien as $info1)
                                  {
                                    if($info['chuyennganh'] == $info1['chuyennganh'])
                                    {
                                      echo '<option value="'.$info1['magiangvien'].'">'.$info1['hovaten'].'</option>';

                                    }
                                    
                                  }
                                ?>  
                              </select>
                            </td>
                            <td><Button id="<?= $stt ?>" class="btnTimKiem">Cập nhập</Button></td>
                          </tr>
                          <script>
                            $(document).ready(function() {
                                $("#<?= $stt ?>").click(function() {
                                    var mamon = ".mamon" + $(this).attr("id");
                                    var tenmon = ".tenmon" + $(this).attr("id");
                                    var magiangvien=$('#magiangvien<?= $stt?>').val();
                                  
                                    var infomamon = $(`${mamon}`).attr('id');
                                    var infotenmon = $(`${tenmon}`).attr('id');
                                  
                                    
                                    
                                    $.get("./index.php", {
                                        controller: "daotao",
                                        action: "capnhatmonhoc",
                                        magiangvien: magiangvien,
                                        mamon: infomamon,
                                        tenmon: infotenmon
                                    }, function(data) {
                                        $("#bangdiem").html(data);
                                        alert("Cập nhật thành công");
                                    })
                                });
                            });
                        </script><?php } ?>
                          <?php } ?>
                        </tbody>
                        
                      </table>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
                  </div>  