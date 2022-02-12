<?php require_once ('./view/layouts/header.php');?>

    <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>
    <style>
      .glot-sub-active {
        color: #1296ba !important;
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
      .chuyen-nganh {
      display: flex;
      gap: 5px;
      font-size: 16px;
      align-items: flex-start;
    }
      .trang-thai {
      display: flex;
      gap: 5px;
      font-size: 16px;
      align-items: flex-start;
      margin-bottom: 2rem;
    }

    .tim-kiem {
      display: flex;
      /* gap:10px; */
    }

    .tim-kiem input {
      padding: 5px 8px;
      font-size: 15px;
    }

    .form {
      display: flex;
      gap: 10px;
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

    .text-center {
      text-align: center;
    }
    </style>
  
       
      <!-- Right -->
      <div id="right">
        <div class="title">
          Quản lý giáo viên

        </div>
        <button type="button" data-toggle="modal" data-target="#myModal" class = "btnUpdate btn " style="margin-bottom: 10px">Thêm Giáo Viên &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
        <div class="form">
        <div class="chuyen-nganh">
          <p>Chọn chuyên ngành:</p>
          <select id="chuyennganh1">
          <option class="a" id="Tất cả">Tất cả</option>
            <?php 
              
              foreach($listChuyenNganh as $CN)
              {
                echo '<option value="'.$CN['machuyennganh'].'">'.$CN['tenchuyennganh'].'</option>'; 
              }
            ?>
          
          </select>
          <script>
           
           $(function(){
               $('#chuyennganh1').trigger('change'); //This event will fire the change event. 
                   $('#chuyennganh1').change(function(){
                       var data= $(this).val();
                       
                       $.get("./index.php",{controller:"daotao",action:"banggiangvien", info:data}, function(data) {
                       $("#bangdiem1").html(data);
                   })                                                                                     
               });
           });
                               
             </script>
        </div>
          
          <div class="tim-kiem">
            <input type="text"  id="timkiem" name="timkiem" placeholder="Nhập mã giáo viên,tên giáo viên">
            <button class="btnTimKiem">Tìm kiếm</button>
          </div>
          <script>
              $(function(){
                  $('#timkiem').trigger('change'); //This event will fire the change event. 
                      $('#timkiem').change(function(){
                          var data= $(this).val();
                          $.get("./index.php",{controller:"daotao",action:"timkiemgiangvien", info:data}, function(data) {
                          $("#bangdiem1").html(data);
                      })                                                                                     
                  });
              });
        </script>
        </div>
        <div class="trang-thai">
          <p>Chọn trạng thái:</p>
          <select>
            <option value="">Tất cả</option>
            <option value="">Đang dạy</option>
            <option value="">Đã nghỉ</option>
          </select>
        </div>
        
            <table cellspacing="3" cellpadding="0" border="0px" width="100%">
              <tbody>
                <tr valign="top">
                  <td style="width: 100%">
                    <div id="bangdiem1">
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
                          <tr class="text-center">
                            <th scope="col">STT</th>
                            <th scope="col">Mã Giáo Viên</th>
                            <th scope="col">Tên Giáo Viên</th>
                            <th scope="col">Trạng thái</th>

                            <th scope="col">Hành động</th>
                           
                          </tr>
                          <tr>
                          <?php $stt=0; foreach ($listGiangVien as $info){ $stt++;?>
                            <td class="text-center"><?= $stt?></td>
                            <td class="text-center"><?= $info['magiangvien']?></td>
                            
                            <td class="text-center"><?= $info['hovaten']?></td>
                            <td class="text-center">
                              <select name="" id="">
                                <option value="">Đang dạy</option>
                                <option value="">Đã nghỉ</option>
                              </select>
                            </td>
                            <td class="text-center">
                            
                              <Button  class="btn xemchitiet" id="<?= $info['magiangvien']?>" type="btnTimKiem" data-toggle="modal"
                                data-target="#myModal1">Xem Chi Tiêt</Button>
                                &nbsp;
                              </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </td>
                </tr>
              </tbody>
              <script>
                        $(document).ready(function(){
                            $(".xemchitiet").click(function(){
                                    var magiangvien=$(this).attr("id")
                                    
                                    $.get("./index.php",{controller:"daotao",action:"giangvien", mgv:magiangvien}, function(data) {
                                    $("#myModal1").html(data);
                                })                                                                                     
                            });
                        });
                        </script>
            </table>
          
        </div>
      </div>

      <!-- End Right -->
    </div>
    <!-- End Page -->
     <!-- Modal -->
     <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Thêm Giáo Viên</h4>
          </div>
          <div class="modal-body">
            <!-- <p>Some text in the modal.</p> -->
            <table width="100%">
              <tbody class="table">
                <tr>
                  <td class= "modal-td" width="30%">Mã GV:</td>
                  <td class= "modal-td"><input type="text" id="magiangvien" name="magiangvien" class="form-control" value="GV<?=$getmgv+1?>" readonly></td>
                </tr>
                <tr>
                  <td class= "modal-td" width="30%">Tên giáo viên:</td>
                  <td class= "modal-td"><input type="text"  id="hovaten" name="hovaten" class="form-control" ></td>
                </tr>
                
                <tr>
                  <td class= "modal-td" width="30%">Giới tính:</td>
                  <td class= "modal-td">
                    <select class="form-control" id="gioitinh" name="gioitinh" >
                      <option value="Nam">Nam</option>
                      <option value="Nữ">Nữ</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td class= "modal-td" width="30%">Số CMND/CCCD:</td>
                  <td class= "modal-td"><input type="text" class="form-control" name="CMND" id="CMND" ></td>
                </tr>
                <tr>
                  <td class= "modal-td" width="30%">Ngày sinh:</td>
                  <td class= "modal-td">
                    <input class="form-control" id="ngaysinh" name="ngaysinh" type="date"/>
                  </td>
                </tr>
                <tr>
                  <td class= "modal-td">Điện thoại:</td>
                  <td class= "modal-td"><input type="text" id="phone" name="phone" class="form-control" ></td>
                </tr>
                <tr>
                  <td class= "modal-td">Email SV:</td>
                  <td class= "modal-td"><input type="text" class="form-control" value="GV<?=$getmgv+1?>@thanglong.edu.vn" name="email" id="email" readonly></td>
                </tr>
                <tr>
                  <td class= "modal-td">Địa chỉ hộ khẩu:</td>
                  <td class= "modal-td">
                    <input type="text" class="form-control"  name="diachi" id="diachi" >

                  </td>
                </tr>
                <tr>
                  <td class= "modal-td" width="30%">Chuyên ngành:</td>
                  <td class= "modal-td">
                    <select class="form-control" id="chuyennganhgiaovien" name="chuyennganhgiaovien">
                      <option value="">Chọn chuyên ngành</option>
                      <?php foreach ($listChuyenNganh as $infoCN)
                        {
                          echo '<option value="'.$infoCN['machuyennganh'].'">'.$infoCN['tenchuyennganh'].'</option>'; 

                        }
                      ?>
                    </select>
                  </td>
                </tr>
               
                <tr>
                  <td class= "modal-td" width="30%">Lớp chủ nhiệm:</td>
                  <td class= "modal-td">
                    <select class="form-control" id="lop" name="lop">
                      <option value="">Chọn lớp</option>
                      
                    </select>
                  </td>
                </tr>

                <script>
              $(document).ready(function(){
                  $('#chuyennganhgiaovien').on('change', function(){
                      var machuyennganh = $(this).val();
                      const url = $(this).attr("action");
                      
                      if(machuyennganh){
                          $.ajax({
                              type:'POST',
                              url,
                              data:'machuyennganh='+machuyennganh,
                              success:function(html){
                                  $('#lop').html(html);
                              }
                          }); 
                      }else{
                          $('#lop').html('<option value="">Chọn lớp </option>');
                          
                      }
                  });
                  
                 
              });
              </script>
              </tbody>
            </table>
          </div>
          <div id="bangdiem2"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            <button type="button" id="create1" class="btn btn-success" data-dismiss="modal">Xác nhận</button>
          </div>
        </div>
        <script>
                    $(document).ready(function(){
                        $("#create1").click(function(){
                            var magiangvien=$('#magiangvien').val();
                            var hovaten=$('#hovaten').val();
                            var gioitinh=$('#gioitinh').val();
                            var CMND=$('#CMND').val();
                            var ngaysinh=$('#ngaysinh').val();
                            var phone=$('#phone').val();
                            var email=$('#email').val();
                            var chuyennganh=$('#chuyennganhgiaovien').val();
                            
                            var diachi=$('#diachi').val();
                            var lop=$('#lop').val();
                           
                            $.get("./index.php",{controller:"daotao",action:"creategiangvien", magiangvien:magiangvien, hovaten:hovaten,
                              gioitinh:gioitinh, CMND:CMND, ngaysinh:ngaysinh, phone:phone, email:email, chuyennganh:chuyennganh, 
                              diachi:diachi,lop:lop}, function(data) {
                                $("#bangdiem2").html(data);
                            })   
                        });
                    });
                </script>
      </div>
    </div>
  
                



    

  <div class="modal fade" id="myModal1" role="dialog">
    
  </div>

  </body>
</html>