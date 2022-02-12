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
                          <?php if($listGiangVien != 0) 
                          {
                            $stt=0; foreach ($listGiangVien as $info){ $stt++;?>
                              <td class="text-center"><?= $stt?></td>
                              <td class="text-center"><?= $info['magiangvien']?></td>
                              
                              <td class="text-center"><?= $info['hovaten']?></td>
                              <td class="text-center">
                                <select name="" id="">
                                  <option value="">Đang dạy</option>
                                  <option value="">Đã nghỉ</option>
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