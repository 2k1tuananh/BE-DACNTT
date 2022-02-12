<?php require_once ('./view/layouts/headerDaoTao.php');?>
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

  .modal-td {
    padding: 10px;
  }

  .ej-trans-sub>span {
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

  .ej-main-sub>span {
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

  .tran-subtitle>span {
    cursor: pointer;
    padding-left: 10px;
    top: 2px;
    position: relative;
  }

  .tran-subtitle>span>span {
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

  .view-icon-copy-main-sub:hover>span,
  .view-icon-edit-sub:hover>span,
  .view-icon-copy-tran-sub:hover>span {
    display: block;
  }

  .tran-subtitle>span>svg {
    width: 16px;
    height: 16px;
    pointer-events: none;
    display: inline-flex !important;
    vertical-align: baseline !important;
  }

  .view-icon-copy-main-sub>svg {
    pointer-events: none;
    color: #ffcc00;
  }

  .view-icon-copy-tran-sub {
    padding-left: 0 !important;
    padding-right: 8px !important;
  }

  .view-icon-copy-tran-sub>svg {
    pointer-events: none;
    color: #0cb1c7;
  }

  a {
    text-decoration: none;
  }

  .chuyen-nganh {
    display: flex;
    gap: 5px;
    font-size: 16px;
    align-items: flex-start;
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

  .item-monhoc {
    text-align: center;
  }
  .scroll{
    height:80%;
    overflow:scroll;
  }
</style>




    <!-- Right -->
    <div id="right">
      <div class="title">
        Quản lý sinh viên

      </div>
      <div>
        <button type="button" data-toggle="modal" data-target="#myModal" class="btnUpdate btn"
          style="margin-bottom: 10px">Thêm Sinh Viên &nbsp;<span
            class="glyphicon glyphicon-plus"></span></button>
      </div>
      <div class="form">
      <script>
           
        $(function(){
            $('#chuyennganh1').trigger('change'); //This event will fire the change event. 
                $('#chuyennganh1').change(function(){
                    var data= $(this).val();
                    
                    $.get("./index.php",{controller:"daotao",action:"select", info:data}, function(data) {
                    $("#bangdiem1").html(data);
                })                                                                                     
            });
        });
                            
          </script>
        <div class="chuyen-nganh">
          <p>Chọn chuyên ngành:</p>
          <select id="chuyennganh1">
          <option class="a" id="Tất cả">Tất cả</option>
            <?php 
              
              foreach($listCN as $CN)
              {
                echo '<option value="'.$CN['machuyennganh'].'">'.$CN['tenchuyennganh'].'</option>'; 
              }
            ?>
          
          </select>
        
        </div>
        <div class="tim-kiem">
          <input type="text" id="timkiem" name="timkiem" placeholder="Nhập mã sinh viên">
          <button class="btnTimKiem">Tìm kiếm</button>
        </div>
        <script>
                $(function(){
                    $('#timkiem').trigger('change'); //This event will fire the change event. 
                        $('#timkiem').change(function(){
                            var data= $(this).val();
                            $.get("./index.php",{controller:"daotao",action:"timkiem", info:data}, function(data) {
                            $("#bangdiem1").html(data);
                        })                                                                                     
                    });
                });
                </script>
      </div>

      <table cellspacing="3" cellpadding="0" border="0px" width="100%">
        <tbody>
          <tr valign="top">
            <td style="width: 100%">
              <div id="bangdiem1">
                <table class="grid" cellspacing="0" border="0" id="ctl00_c_GridDC" style="
                          border-style: None;
                          width: 100%;
                          border-collapse: collapse;
                        ">
                  <tbody>
                  
                    <tr>
                      <th scope="col" style="
                      
                      font-size: 15px;
                      
                    ">STT</th>
                      <th style="
                      
                      font-size: 15px;
                      
                    "scope="col">Mã SV</th>
                      <th style="
                      
                      font-size: 15px;
                      
                    "scope="col">Tên Sinh Viên</th>
                      <th style="
                      
                      font-size: 15px;
                      
                    
                      
                    "scope="col">Trạng thái</th>
                      <th style="
                      
                      font-size: 15px;
                      
                    "scope="col"></th>

                    </tr>
                    <?php $stt=0; foreach ($listStudent as $info){ $stt++;?>
                    <tr>
                      <td><?= $stt?></td>
                      <td class="item-monhoc"><?= $info['masinhvien']?></td>
                      <td class="item-monhoc"><?= $info['hovaten']?></td>
                      
                      <td class="item-monhoc">
                        <select name="" id="">
                          <option value="">Đang học</option>
                          <option value="">Đã tốt nghiệp</option>
                          <option value="">Đang bảo lưu</option>
                          <option value="">Đã thôi học</option>
                        </select>
                      </td>


                      <td class="item-monhoc">
                        <Button class="btnTimKiem" type="button" data-toggle="modal"
                          data-target="#myModal1">Xem Chi Tiêt</Button>
                        &nbsp;
                        <Button class="btnTimKiem" type="button" data-toggle="modal"
                          data-target="#myModal2">Đánh Giá</Button>
                          <Button class="btnTimKiem" type="button" data-toggle="modal"
                          data-target="#myModal2">Cập Nhật</Button>
                      </td>
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
  <!-- End Page -->
  <!-- Modal -->
  <div class="modal fade " id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thêm Sinh Viên</h4>
        </div>
       
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
          <table width="100%">
            <tbody class="table">
              <tr>
              <tr>
                <td class="modal-td" width="30%">Mã Sinh Viên:</td>
                <td class="modal-td">
                  <input  id="masinhvien" name="masinhvien" class="form-control" type="text" value="A<?=$getmasv+1?>" readonly/>
                </td>
              </tr>
              <tr>
                <td class="modal-td" width="30%">Họ và tên:</td>
                <td class="modal-td">
                  <input  id="hovaten" name="hovaten" class="form-control" type="text" />
                </td>
              </tr>
              <td class="modal-td" width="30%">Giới tính:</td>
              <td class="modal-td">
                <select class="form-control" id="gioitinh" name="gioitinh">
                  <option value="Nam">Nam</option>
                  <option value="Nữ">Nữ</option>
                </select>
              </td>
              </tr>
              <tr>
                <td class="modal-td" width="30%">Số CMND/CCCD:</td>
                <td class="modal-td"><input type="text" class="form-control" name="CMND" id="CMND"></td>
              </tr>
              <tr>
                <td class="modal-td" width="30%">Ngày sinh:</td>
                <td class="modal-td">
                  <input class="form-control" type="date" id="ngaysinh" name="ngaysinh"/>
                </td>
              </tr>
              <tr>
                <td class="modal-td">Điện thoại:</td>
                <td class="modal-td"><input type="text" class="form-control" id="phone" name="phone"></td>
              </tr>
              <tr>
                <td class="modal-td">Email SV:</td>
                <td class="modal-td"><input type="text" class="form-control" value="A<?=$getmasv+1?>@thanglong.edu.vn" name="email" id="email" readonly></td>
              </tr>
              <tr>
                <td class="modal-td">Lớp:</td>
                <td class="modal-td">
                  <select class="form-control" id="lop" name="lop">
                  <option value="">Chọn lớp</option>
                  <?php foreach ($listLopCN as $infoCN)
                    {
                      echo '<option value="'.$infoCN['malop'].'">'.$infoCN['tenlop'].'</option>'; 

                    }
                  ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td class="modal-td">Chuyên Ngành:</td>
                <td class="modal-td">
                  <select class="form-control" id="chuyennganh" name="chuyennganh">
                  <option value="">Chọn chuyên ngành</option>
                  <?php foreach ($listCN as $infoCN)
                    {
                      echo '<option value="'.$infoCN['machuyennganh'].'">'.$infoCN['tenchuyennganh'].'</option>'; 

                    }
                  ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td class="modal-td">Giáo viên CN:</td>
                <td class="modal-td">
                  <select class="form-control" id="giaovien" name="giaovien">
                    <option value="">Chọn giáo viên</option>
                  
                  
                  </select>
                </td>
              </tr>
              <script>
              $(document).ready(function(){
                  $('#chuyennganh').on('change', function(){
                      var machuyennganh = $(this).val();
                      const url = $(this).attr("action");
                      if(machuyennganh){
                          $.ajax({
                              type:'POST',
                              url,
                              data:'machuyennganh='+machuyennganh,
                              success:function(html){
                                  $('#giaovien').html(html);
                              }
                          }); 
                      }else{
                          $('#giaovien').html('<option value="">Chọn giáo viên </option>');
                          
                      }
                  });
                  
                 
              });
              </script>
              <tr>
                <td class="modal-td">Địa chỉ hộ khẩu:</td>
                <td class="modal-td">
                  <input type="text" class="form-control" name="diachi" id="diachi">

                </td>
              </tr>
              
            </tbody>
          </table>

        </div>
        <div id="bangdiem1"></div>
        <div class="modal-footer">
          <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" id="create" class="btn btn-success" data-dismiss="modal">OK</button>
          
        </div>
      </div>
      <script>
                    $(document).ready(function(){
                        $("#create").click(function(){
                            var masinhvien=$('#masinhvien').val();
                            var hovaten=$('#hovaten').val();
                            var gioitinh=$('#gioitinh').val();
                            var CMND=$('#CMND').val();
                            var ngaysinh=$('#ngaysinh').val();
                            var phone=$('#phone').val();
                            var email=$('#email').val();
                            var chuyennganh=$('#chuyennganh').val();
                            var giaovien=$('#giaovien').val();
                            var diachi=$('#diachi').val();
                            var lop=$('#lop').val();
                            
                            $.get("./index.php",{controller:"daotao",action:"createstudent", masinhvien:masinhvien, hovaten:hovaten,
                              gioitinh:gioitinh, CMND:CMND, ngaysinh:ngaysinh, phone:phone, email:email, chuyennganh:chuyennganh, 
                              giaovien:giaovien,diachi:diachi,lop:lop}, function(data) {
                                $("#bangdiem1").html(data);
                            })   
                        });
                    });
                </script>
    </div>
  </div>
            


  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog" style="width: 60%;">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Chi Tiết Sinh Viên</h4>
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
          <table width="50%">
            <tbody class="table">
              <tr>
                <td class="modal-td" width="50%">Mã Sinh Viên:</td>
                <td class="modal-td">
                  <p>Hahahah</p>
                </td>
              </tr>
              <td class="modal-td" width="50%">Giới tính:</td>
              <td class="modal-td">
                <p>Hahahah</p>
              </td>
              </tr>
              <tr>
                <td class="modal-td" width="50%">Số CMND/CCCD:</td>
                <td class="modal-td">
                  <p>Hahahah</p>
                </td>
              </tr>
              <tr>
                <td class="modal-td" width="50%">Ngày sinh:</td>
                <td class="modal-td">
                  <p>Hahahah</p>
                </td>
              </tr>
              <tr>
                <td class="modal-td">Điện thoại:</td>
                <td class="modal-td">
                  <p>Hahahah</p>
                </td>
              </tr>
              <tr>
                <td class="modal-td">Email SV:</td>
                <td class="modal-td">
                  <p>Hahahah</p>
                </td>
              </tr>
              <tr>
                <td class="modal-td">Chuyên Ngành:</td>
                <td class="modal-td">
                  <p>Hahahah</p>
                </td>
              </tr>
              <tr>
                <td class="modal-td">Giáo viên CN:</td>
                <td class="modal-td">
                  <p>Hahahah</p>
                </td>
              </tr>

              <tr>
                <td class="modal-td">Địa chỉ hộ khẩu:</td>
                <td class="modal-td">
                  <p>Hahahah</p>

                </td>
              </tr>
              <tr>
                <td class="modal-td">Chỗ ở hiện nay:</td>
                <td class="modal-td">
                  <p>Hahahah</p>

                </td>
              </tr>
            </tbody>
          </table>
          <table cellspacing="3" cellpadding="0" border="0px" width="100%">
            <tbody>
              <tr valign="top">
                <td style="width: 100%">
                  <div>
                    <table class="grid" cellspacing="0" border="0" id="ctl00_c_GridDC" style="
                        border-style: None;
                        width: 100%;
                        border-collapse: collapse;
                      ">
                      <tbody>
                        <tr>
                          <th scope="col">STT</th>
                          <th scope="col" style="white-space: nowrap">
                            Mã HP
                          </th>
                          <th scope="col">Tên HP</th>
                          <th scope="col" style="white-space: nowrap">
                            Số TC
                          </th>
                          <th scope="col">Điểm quá trình</th>
                          <th scope="col">Điểm thi</th>
                          <th scope="col">Điểm tổng</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>CF212</td>
                          <td>Cấu trúc dữ liệu</td>
                          <td align="center">3</td>
                          <td align="center">10</td>
                          <td align="center">10</td>
                          <td align="center">10</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>CS100</td>
                          <td>Tin đại cương</td>
                          <td align="center">2</td>
                          <td align="center">10</td>
                          <td align="center">10</td>
                          <td align="center">10</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>CS110</td>
                          <td>Kỹ thuật số</td>
                          <td align="center">2</td>
                          <td align="center">10</td>
                          <td align="center">10</td>
                          <td align="center">10</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>CS121</td>
                          <td>Ngôn ngữ lập trình</td>
                          <td align="center">3</td>
                          <td align="center">10</td>
                          <td align="center">10</td>
                          <td align="center">10</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>CS122</td>
                          <td>Lập trình hướng đối tượng</td>
                          <td align="center">3</td>
                          <td align="center">10</td>
                          <td align="center">10</td>
                          <td align="center">10</td>
                        </tr>



                      </tbody>
                    </table>
                  </div>
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
  </div>



  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Đánh Giá Sinh Viên</h4>
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
          <table width="100%">
            <tbody class="table">
              <tr>
                <td class="modal-td">Kết Quả HT</td>
                <td class="modal-td">
                  <select class="form-control">
                    <option value="">Giỏi</option>
                    <option value="">Khá</option>
                    <option value="">Trung Bình</option>
                    <option value="">Kém</option>
                  </select>

                </td>
              </tr>
              <tr>
                <td class="modal-td">Ý Thức</td>
                <td class="modal-td">
                  <select class="form-control">
                    <option value="">Giỏi</option>
                    <option value="">Khá</option>
                    <option value="">Trung Bình</option>
                    <option value="">Kém</option>
                  </select>

                </td>
              </tr>
              <tr>
                <td class="modal-td">Lời văn</td>
                <td class="modal-td">
                  <textarea name="" id="" class="form-control"></textarea>

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
  </div>
</body>

</html>