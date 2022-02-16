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
                              Mã chuyên ngành
                            </th>
                            <th scope="col">Tên chuyên ngành</th>
                            <th scope="col"></th>
                            <?php $stt=0; 
                            if($chuyennganh != 0 )
                            {
                            foreach ($chuyennganh as $info){ $stt++;?>
                            <tr>
                           
                            <td><?= $stt?></td>
                            <td ><?= $info['machuyennganh']?></td>
                            <td><?= $info['tenchuyennganh']?></td>

                            <td class="item-monhoc">
                            <button class="btnTimKiem capnhat" type="button" id="<?= $info['machuyennganh']?>" data-toggle="modal" data-target="#SuaMonHoc">Cập nhật</button>
                              
                             
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
                            $(".capnhat").click(function(){
                                    var machuyennganh=$(this).attr("id")
                                   
                                    $.get("./index.php",{controller:"daotao",action:"updatechuyennganh", machuyennganh:machuyennganh}, function(data) {
                                    $("#SuaMonHoc").html(data);
                                })                                                                                     
                            });
                        });
                        </script>
              </tbody>
            </table>
        </div>