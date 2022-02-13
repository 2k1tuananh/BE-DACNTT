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
                            <th scope="col">Mã Môn</th>
                            <th scope="col">Tên Môn</th>
                            <th scope="col">Giáo Viên</th>
                            <th scope="col"></th>
                          </tr>
                          <tr>
                          <?php $stt=0; foreach ($listGiangVien as $info){ $stt++;?>
                            <td><?= $stt?></td>
                            <td ><?= $info['mamon']?></td>
                            <td ><?= $info['tenmon']?></td>
                            <td >
                              <select class="form-control" style="width: 50%">
                              <?php
                                  foreach($listGiangVien as $info1)
                                  {
                                    if($info['chuyennganh']== $info1['chuyennganh'])
                                    {
                                      echo '<option value="'.$info1['magiangvien'].'">'.$info1['hovaten'].'</option>';
                                    }
                                  }
                                ?>  
                              </select>
                            </td>
                            <td><Button class="btnTimKiem">Cập nhập</Button></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>