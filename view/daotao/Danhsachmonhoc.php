<?php require_once ('./view/layouts/headerDaoTao.php');?>
    <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>
    <style>
      .glot-sub-active {
        color: #1296ba !important;
      }
      .modal-td{
        padding: 10px;
      }
      .glot-sub-hovered {
        color: #1296ba !important;
      }
      .glot-sub-clzz {
        cursor: pointer;

        lineheight: 1.2;
        font-size: 28px;
        color: #ffcc00;
        background: rgba(17, 17, 17, 0.7);
      }
      .glot-sub-clzz:hover {
        color: #1296ba !important;
      }
      .ej-trans-sub {
        position: absolute;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999999;
        cursor: move;
      }
      .ej-trans-sub > span {
        color: #3cf9ed;
        font-size: 18px;
        text-align: center;
        padding: 0 16px;
        line-height: 1.5;
        background: rgba(32, 26, 25, 0.8);
        /* // text-shadow: 0px 1px 4px black; */
        padding: 0 8px;

        /* lineheight: 1.2; */
        font-size: 16px;
        color: #0cb1c7;
        background: rgba(67, 65, 65, 0.7);
      }
      .ej-main-sub {
        position: absolute;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 99999999;
        cursor: move;
        padding: 0 8px;
      }
      .ej-main-sub > span {
        color: white;
        font-size: 20px;
        line-height: 1.5;
        text-align: center;
        background: rgba(32, 26, 25, 0.8);
        /* // text-shadow: 0px 1px 4px black; */
        padding: 2px 8px;

        /* lineheight: 1.2; */
        font-size: 28px;
        color: #ffcc00;
        background: rgba(17, 17, 17, 0.7);
      }

      .ej-main-sub .glot-sub-clzz {
        background: transparent !important;
      }

      .tran-subtitle > span {
        cursor: pointer;
        padding-left: 10px;
        top: 2px;
        position: relative;
      }

      .tran-subtitle > span > span {
        position: absolute;
        top: -170%;
        background: rgba(0, 0, 0, 0.5);
        font-size: 13px;
        line-height: 20px;
        padding: 2px 8px;
        color: white;
        display: none;
        border-radius: 4px;
        white-space: nowrap;
        left: -50%;
        font-weight: normal;
      }

      .view-icon-copy-main-sub:hover > span,
      .view-icon-edit-sub:hover > span,
      .view-icon-copy-tran-sub:hover > span {
        display: block;
      }

      .tran-subtitle > span > svg {
        width: 16px;
        height: 16px;
        pointer-events: none;
        display: inline-flex !important;
        vertical-align: baseline !important;
      }

      .view-icon-copy-main-sub > svg {
        pointer-events: none;
        color: #ffcc00;
      }

      .view-icon-copy-tran-sub {
        padding-left: 0 !important;
        padding-right: 8px !important;
      }
      .view-icon-copy-tran-sub > svg {
        pointer-events: none;
        color: #0cb1c7;
      }
      a{
          text-decoration: none;
      }
      .item-monhoc{
        align-items:center;
      }
      .chuyen-nganh{
          display:flex;
          gap:5px;
          font-size: 16px;
          align-items:flex-start;
      }
      .tim-kiem{
        display:flex;
          /* gap:10px; */
      }
      .tim-kiem input{
          padding:5px 8px;
          font-size:15px;
      }
      .form{
          display:flex;
          gap:10px;
          justify-content: space-between;
          margin-bottom: 2rem;
      }
      .btnTimKiem {
  z-index: 1;
  position: relative;
  font-size: inherit;
  font-family: inherit;
  color: white;
  padding: 0.5em 1em;
  outline: none;
  border: none;
  background-color: hsl(236, 32%, 26%);
  overflow: hidden;
  transition: color 0.4s ease-in-out;
}

.btnTimKiem::before {
  content: '';
  z-index: -1;
  position: absolute;
  top: 100%;
  right: 100%;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  background-color: #05c20f;
  transform-origin: center;
  transform: translate3d(50%, -50%, 0) scale3d(0, 0, 0);
  transition: transform 0.45s ease-in-out;
}

.btnTimKiem:hover {
  cursor: pointer;
  color: #161616;
}

.btnTimKiem:hover::before {
  transform: translate3d(50%, -50%, 0) scale3d(15, 15, 15);
}
    </style>
  
      <!-- Right -->
      <div id="right">
        <div class="title">
          Quản lý môn học 

        </div>
        <div class="form">

          <button type="button" data-toggle="modal" data-target="#ThemMonHoc" class = "btnUpdate btn" style="margin-bottom: 10px;">Thêm môn Học &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
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
                            <th scope="col">Ca học</th>
                            <th scope="col">Trạng thái</th>

                          </tr>
                          <tr>
                            <td>1</td>
                            <td>CF212</td>
                            <td>Cấu trúc dữ liệu</td>
                            <td class="item-monhoc">3</td>
                            
                            <td class="item-monhoc">5</td>
                            <td class="item-monhoc">10</td>
                            
                            <td class="item-monhoc">
                              <button class="btnTimKiem" type="button" data-toggle="modal" data-target="#SuaMonHoc">Update</button>
                              <button type="button" data-toggle="modal" data-target="#XoaMonHoc" class="btnTimKiem" >Delete</button>
                            </td>
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
    <!-- End Page -->
    <!-- Modal thêm môn học-->
    <div class="modal fade" id="ThemMonHoc" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Thêm Môn Học</h4>
          </div>
          
          <div class="modal-body">
            <!-- <p>Some text in the modal.</p> -->
            <table width="100%">
              <tbody class="table">
                <tr>
                  <td class="modal-td" width="30%">Mã Môn:</td>
                  <td class="modal-td"><input type="text" class="form-control" ></td>
                </tr>
                <tr>
                  <td class="modal-td" width="30%">Tên Môn</td>
                  <td class="modal-td"><input type="text" class="form-control" ></td>
                </tr>
                <tr>
                  <td class="modal-td" width="30%">Số TC:</td>
                  <td class="modal-td"><input type="text" class="form-control" ></td>
                </tr>
                
                <tr>
                  <td class="modal-td" width="30%">Chuyên ngành:</td>
                  <td class="modal-td">
                    <select class="form-control" >
                      <option value="">Công nghệ thông tin</option>
                      <option value="">Ngôn ngữ Nhật</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td class="modal-td" width="30%">Giờ Học:</td>
                  <td class="modal-td"><input type="text" class="form-control" ></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
          </div>
        </div>
        
        
      </div>
    </div>
    <!-- Modal sửa môn học-->
    <div class="modal fade" id="SuaMonHoc" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Cập nhập môn học</h4>
          </div>
          
          <div class="modal-body">
            <!-- <p>Some text in the modal.</p> -->
            <table width="100%">
              <tbody class="table">
                <tr>
                  <td class="modal-td" width="30%">Mã Môn:</td>
                  <td class="modal-td"><input type="text" class="form-control" ></td>
                </tr>
                <tr>
                  <td class="modal-td" width="30%">Tên Môn</td>
                  <td class="modal-td"><input type="text" class="form-control" ></td>
                </tr>
                <tr>
                  <td class="modal-td" width="30%">Số TC:</td>
                  <td class="modal-td"><input type="text" class="form-control" ></td>
                </tr>
                
                <tr>
                  <td class="modal-td" width="30%">Chuyên ngành:</td>
                  <td class="modal-td">
                    <select class="form-control" >
                      <option value="">Công nghệ thông tin</option>
                      <option value="">Ngôn ngữ Nhật</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td class="modal-td" width="30%">Giờ Học:</td>
                  <td class="modal-td"><input type="text" class="form-control" ></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" data-dismiss="modal">Update</button>
          </div>
        </div>
        
        
      </div>
    </div>
    <!-- Modal xóa môn học-->
    <div class="modal fade" id="XoaMonHoc" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Xóa môn học</h4>
          </div>
          
          <div class="modal-body">
            <!-- <p>Some text in the modal.</p> -->
            <table width="100%">
              <tbody class="table">
                
                
                Bạn chắc chắn muốn xóa môn học này?
                
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
          </div>
        </div>
        
        
      </div>
    </div>

  
  </body>
</html>