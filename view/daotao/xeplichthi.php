<?php require_once ('./view/layouts/headerDaoTao.php');?>
<style>
  .chuyen-nganh{
    display:flex;
    gap:5px;
    align-items:baseline;
  }
  .chuyen-nganh p{
   
    font-size:16px;
  }
  .chuyen-nganh select{
    font-size:16px;
    border-radius:5px;
    /* border:none; */
  }
  .form-tkb{
    display:flex;
    justify-content:space-between;
    margin-bottom: 40px;
  }
  .tim-kiem{
    font-size:16px;
  }
  .tim-kiem input{
    padding: 6px 10px;
    

  }
  .btnTimKiem{
    padding: 6px 10px;
    margin-left:-6px;

  }
  .btnTimKiem {
  z-index: 1;
  position: relative;
  font-size: inherit;
  font-family: inherit;
  color: white;
  padding: 0.5em 0.7em;
  outline: none;
  border: none;
  background-color: hsl(236, 32%, 26%);
  overflow: hidden;
  cursor: pointer;
}

  .btnTimKiem::after {
    content: '';
    z-index: -1;
    background-color: hsla(0, 0%, 100%, 0.2);
    position: absolute;
    top: -50%;
    bottom: -50%;
    width: 1.25em;
    transform: translate3d(-525%, 0, 0) rotate(35deg);
  }

  .btnTimKiem:hover::after {
    transition: transform 0.45s ease-in-out;
    transform: translate3d(200%, 0, 0) rotate(35deg);
  }
</style>
      <div id="right">
        <div class="title">
          Xếp Lịch Thi

        </div>
        <div class="form form-tkb">
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