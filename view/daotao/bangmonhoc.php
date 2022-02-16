<div id="info">
        <table  cellspacing="3" cellpadding="0"  width="100%">
              <tbody>
                <tr valign="top">
                  <td style="width: 100%">
                    <div id="bangdiem1">
                      <table
                        class="grid"
                        cellspacing="0"
                     
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
                              Mã môn
                            </th>
                            <th scope="col">Tên môn</th>
                            <th scope="col">Số TC</th>
                            <th scope="col">Thứ</th>
                            <th scope="col">Ca học</th>
                            <th scope="col">Trạng thái</th>
                            <?php $stt=0; 
                            if($monhoc != '' )
                            {
                            foreach ($monhoc as $info){ $stt++;?>
                            <tr>
                           
                            <td><?= $stt?></td>
                            <td ><?= $info['mamon']?></td>
                            <td><?= $info['tenmon']?></td>
                            <td ><?= $info['sotinchi']?></td>
                            <td><?= $info['thu']?></td>
                            <td ><?= $info['ca']?></td>

                            <td class="item-monhoc">
                            <button class="btnTimKiem capnhat" type="button" id="<?= $info['mamon']?>" data-toggle="modal" data-target="#SuaMonHoc">Cập nhật</button>
                              
                             
                            </td>
                            
                          </tr>
                          <?php } ?>
                          <?php } ?>
                          </tr>
                          
                       
                        </tbody>
                      </table>
                    </div>
                  </td>
                </tr>
                <script>
                        $(document).ready(function(){
                            $("button.capnhat").click(function(){
                                    var mamon=$(this).attr("id")
                                   
                                    $.get("./index.php",{controller:"daotao",action:"updatechuyennganh", mamon:mamon}, function(data) {
                                    $("#SuaMonHoc").html(data);
                                })                                                                                     
                            });
                        });
                        </script>
              </tbody>
            </table>
        </div>