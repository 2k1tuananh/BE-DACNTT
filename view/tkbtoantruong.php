<?php if($_SESSION['role_id']=="2"){ require_once ('./view/layouts/headerGiaoVien.php');}
if($_SESSION['role_id']=="1"){
  require_once("./view/sinhvien/ThongTinCaNhan.php");}
else{
  require_once ('./view/layouts/headerDaoTao.php');
} ?>
      <div id="right">
        <div class="title">
          Thời Khóa Biểu Toàn Trường 

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
                                $.get("./index.php",{controller:"tkb",action:"tkb_toantruong_loccn", info1:data}, function(data) {
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
                                $.get("./index.php",{controller:"tkb",action:"tkb_toantruong_timkiem", key:data}, function(data) {
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
                            <th scope="col" style="white-space: nowrap">
                              Số TC
                            </th>
                            
                            <th scope="col">Thứ</th>
                            <th scope="col">Ca</th>
                            <th scope="col">Giáo viên</th>
                          </tr>
                          <?php $i=0; foreach($data as $info){  $i++;?>
                          <tr>
                            <td class="text-center"><?=$i?></td>
                            <td class="text-center"><?= $info['mamon']?></td>
                            <td class="text-center"><?= $info['tenmon']?></td>
                            <td class="text-center" ><?= $info['sotinchi']?></td>
                            <td class="text-center" ><?= $info['thu']?></td>
                            <td class="text-center" ><?= $info['ca']?></td>
                            <td class="text-center" ><?= $info['hovaten']?></td>
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
      </div>

      <!-- End Right -->
    </div>
    <!-- End Page -->
    
    

  
  </body>
</html>
