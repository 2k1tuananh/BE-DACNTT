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
                <select >
                    <option value="">Tất cả</option>
                    <option value="">Công nghệ thông tin</option>
                    <option value="">Y tế</option>
                    <option value="">Ngôn ngữ nhật</option>
                </select>
            </div>
            <div class="tim-kiem">
                <input type="text" placeholder="Nhập mã môn,tên môn">
                <button class="btnTimKiem">Tìm kiếm</button>
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
                            <th scope="col">Ca</th>
                            <th scope="col">Giáo viên</th>
                          </tr>
                          <?php foreach($data as $info){ $i=0; $i++;?>
                          <tr>
                            <td class="text-center">$i</td>
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
