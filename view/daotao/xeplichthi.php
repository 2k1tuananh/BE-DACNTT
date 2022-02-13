<?php require_once ('./view/layouts/headerDaoTao.php');?>
      <div id="right">
        <div class="title">
          Xếp Lịch Thi

        </div>
        <div class="form">
          <div class="chuyen-nganh">
            <p>Chọn chuyên ngành:</p>
            <select>
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
                            <th scope="col">Ngày Thi</th>
                            <th scope="col">Trạng Thái</th>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>CF212</td>
                            <td>Cấu trúc dữ liệu</td>
                            <td >
                              <input type="datetime-local"/>
                               
                            </td>
                            <td ><Button class="btnTimKiem">Cập Nhập</Button></td>
                          </tr>
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