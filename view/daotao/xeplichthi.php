<?php require_once ('./view/layouts/headerDaoTao.php');?>
      <div id="right">
        <div class="title">
          Xếp Lịch Thi

        </div>
        <div class="form">
          <div class="chuyen-nganh">
            <p>Chọn chuyên ngành:</p>
            <select id="sapxep" style="border: none; background-color: #e4e8e9;">
              <script>
              $(function(){
                  $('#sapxep').trigger('change'); //This event will fire the change event. 
                      $('#sapxep').change(function(){
                          var data= $(this).val();
                          $.get("./index.php",{controller:"daotao",action:"xeplichthi_loccn", info1:data}, function(data) {
                          $("#info").html(data);
                      })                                                                                     
                  });
              });
              </script>
              <option>Tất cả</option>
              <?php foreach($datacn as $cn){?>
                <option><?= $cn['tenchuyennganh']?></option>
              <?php }?>
          </select>
          </div>
          <div class="tim-kiem">
          <input id="timkiem" type="text" placeholder="Nhập mã môn,tên môn">
            <button class="btnTimKiem">Tìm kiếm</button>
            <script>
                $(function(){
                    $('.btnTimKiem').trigger('click'); //This event will fire the change event. 
                        $('.btnTimKiem').click(function(){
                            var data= $('#timkiem').val();
                            $.get("./index.php",{controller:"daotao",action:"lichthi_timkiem", key:data}, function(data) {
                            $("#info").html(data);
                        })                                                                                     
                    });
                });
              </script>
          </div>
        </div>
       
        
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
                        <tbody id="info">
                          <tr>
                            <th scope="col">STT</th>
                            <th scope="col" style="white-space: nowrap">
                              Mã Môn
                            </th>
                            <th scope="col">Tên Môn</th>
                            <th scope="col">Ngày Thi</th>
                            <th scope="col">Ca Thi</th>
                            <th scope="col">Trạng Thái</th>
                          </tr>
                          <?php $i=0; foreach($mon as $value){ $i++?>
                          <tr>
                            <td><?= $i?></td>
                            <td><?= $value['mamon']?></td>
                            <td><?= $value['tenmon']?></td>
                            <td >
                              <input id="ngaythi<?= $i?>" value="<?= date($value['ngaythi'])?>" type="date"/>
                               
                            </td>
                            <td ><select id="ca<?= $i?>" class="form-control" >
                              <option ><?= $value['cathi']?></option>
                              <option >1-2</option>
                              <option >1-3</option>
                              <option >1-5</option>
                              <option >6-7</option>
                              <option >6-9</option>
                              <option >6-10</option>
                                </select></td>
                            <td ><Button id="btcapnhat<?= $i?>" class="btnTimKiem">Cập Nhập</Button></td>
                            <script>
                              $(function(){
                                  $('#btcapnhat<?= $i?>').trigger('click'); //This event will fire the change event. 
                                      $('#btcapnhat<?= $i?>').click(function(){
                                          var data="<?= $value['mamon']?>";
                                          var data1= $(ngaythi<?= $i?>).val();
                                          var data2= $(ca<?= $i?>).val();
                                          var thongbao="Cập nhật thành công";
                                          alert(thongbao );
                                          $.get("./index.php",{controller:"daotao",action:"capnhatlichthi", mamon:data,ngaythi:data1, cathi:data2}, function(data) {
                                      })                                                                                     
                                  });
                              });
                            </script>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            
        </div>
      </div>

      <!-- End Right -->
    </div>
  
  </body>
</html>