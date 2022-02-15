<div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Xem Chi Tiết Giáo Viên</h4>
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
          <table width="100%">
            <tbody class="table">
             <tr>

               <td class="modal-td" width="30%">Mã GV:</td>
               <td class="modal-td">
                 <p><?=$info['magiangvien']?></p>
               </td>
             </tr>
             <tr>

               <td class="modal-td" width="30%">Tên giáo viên:</td>
               <td class="modal-td">
               <p><?=$info['hovaten']?></p>
               </td>
             </tr>
             <tr>

               <td class="modal-td" width="30%">Giới tính:</td>
               <td class="modal-td">
               <p><?=$info['gioitinh']?></p>
               </td>
             </tr>
              </tr>
              <tr>
                <td class="modal-td" width="30%">Số CMND/CCCD:</td>
                <td class="modal-td">
                <p><?=$info['cmnd']?></p>
                </td>
              </tr>
              <tr>
                <td class="modal-td" width="30%">Ngày sinh:</td>
                <td class="modal-td">
                <p><?=$info['ngaysinh']?></p>
                </td>
              </tr>
              <tr>
                <td class="modal-td">Điện thoại:</td>
                <td class="modal-td">
                <p><?=$info['dienthoai']?></p>
                </td>
              </tr>
              <tr>
                <td class="modal-td">Email GV:</td>
                <td class="modal-td">
                <p><?=$info['email']?></p>
                </td>
              </tr>

              <tr>
                <td class="modal-td">Địa chỉ hộ khẩu:</td>
                <td class="modal-td">
                <p><?=$info['diachi']?></p>

                </td>
              </tr>
              <tr>
                <td class="modal-td">Chuyên Ngành:</td>
                <td class="modal-td">
                <p><?=$info['chuyennganh']?></p>

                </td>
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
    <form action="/" method="post" id="search" role="form">
                            <select name="type" id="type" class="form-control" >
                                <option value="">Chọn danh mục</option>
                                <?php 
                                foreach ($listType as $ls)
                                {
                                    echo '<option value='.$ls['id'].'>'.$ls['name'].'</option>';
                                }
                                ?>
                            </select>
                            <div class="input-seach">
                                <input type="text" name="search" id="search" class="form-control">
                                <button  class="btn-search-pro"><i class="fa fa-search"></i></button>
                            </div>
                            <div class="clear"></div>
                        </form>