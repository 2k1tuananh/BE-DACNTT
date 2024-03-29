<?php require_once('./view/layouts/headerdaotao.php'); ?>

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
  td{
    text-align: center;
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
    align-items: baseline;

  }

  .chuyen-nganh select {
    border-radius: 5px;
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
</style>


<!-- Right -->
<div id="right" style="width: 100%;margin-left:10px;">
  <div class="title">
    Phân Công Giảng Dạy

  </div>
  <div class="form">
    <div class="chuyen-nganh">
      <p>Chọn chuyên ngành:</p>
      <select class="form-control" id="chuyennganh1">
        <option class="a" id="Tất cả">Tất cả</option>
        <?php

        foreach ($listChuyenNganh as $CN) {
          echo '<option value="' . $CN['machuyennganh'] . '">' . $CN['tenchuyennganh'] . '</option>';
        }
        ?>

      </select>
      <script>
        $(function() {
          $('#chuyennganh1').trigger('change'); //This event will fire the change event. 
          $('#chuyennganh1').change(function() {
            var data = $(this).val();

            $.get("./index.php", {
              controller: "daotao",
              action: "banggiangday",
              info: data
            }, function(data) {
              $("#bangdiem1").html(data);
            })
          });
        });
      </script>
    </div>
    <div class="tim-kiem">
      <input type="text" id="timkiem" name="timkiem" placeholder="Nhập mã môn,tên môn">
      <button class="btnTimKiem">Tìm kiếm</button>
    </div>
  </div>
  <script>
    $(function() {
      $('#timkiem').trigger('change'); //This event will fire the change event. 
      $('#timkiem').change(function() {
        var data = $(this).val();
        $.get("./index.php", {
          controller: "daotao",
          action: "timkiemmonhoc",
          info: data
        }, function(data) {
          $("#bangdiem1").html(data);
        })
      });
    });
  </script>
  <div id="capnhat">
    <table cellspacing="3" cellpadding="0" border="0px" width="100%">
      <tbody>
        <tr valign="top">
          <td style="width: 100%">
            <div id="bangdiem1">
              <table class="grid" cellspacing="0" border="0" id="ctl00_c_GridDC" style="
                          border-style: None;
                          width: 100%;
                          border-collapse: collapse;
                        "
                      >
                        <tbody>
                          <tr>
                            <th  class="text-center">STT</th>
                            <th  class="text-center">Mã Môn</th>
                            <th  class="text-center">Tên Môn</th>
                            <th  class="text-center">Giáo Viên</th>
                            <th  class="text-center">Phòng học</th>
                            <th  class="text-center"></th>
                          </tr>
                          <tr>
                          <?php $stt=0; foreach ($listMonHoc1 as $info){ $check=0;$stt++;
                              foreach($listMonHoc as $infomonhoc)
                              {
                                if($info['mamon'] == $infomonhoc['mamon'])
                                {?>
                                  <td><?= $stt?></td>
                                  <td class="mamon<?= $stt ?>" id="<?= $infomonhoc['mamon'] ?>" name="mamon"><?= $infomonhoc['mamon']?></td>
                                  <td class="tenmon<?= $stt ?>" id="<?= $infomonhoc['tenmon'] ?>" name="tenmon"><?= $infomonhoc['tenmon']?></td>
                                  <td >
                                    <select class="form-control" style="width: 50%"  id="magiangvien<?= $stt?>"  >
                                    <option value="<?= $infomonhoc['magiangvien'] ?>"><?= $infomonhoc['hovaten']?></option>
                                      <?php
                                        foreach($listGiangVien as $info1)
                                        {
                                          if($info['chuyennganh'] == $info1['chuyennganh'])
                                          {
                                            echo '<option value="'.$info1['magiangvien'].'">'.$info1['hovaten'].'</option>';
      
                                          }
                                          
                                        }
                                      ?>  
                                    </select>
                                  </td>
                                  <td >
                                    <select class="form-control" style="width: 50%"  id="malop<?= $stt?>"  >
                                    <option value="<?= $infomonhoc['malop'] ?>"><?= $infomonhoc['malop']?></option>
                                      <?php
                                        foreach($listLop as $info2)
                                        {
                                          
                                            echo '<option value="'.$info2['malop'].'">'.$info2['tenlop'].'</option>';
      
                                          
                                          
                                        }
                                      ?>  
                                    </select>
                                  </td>
                                  
                                  <td><Button id="<?= $stt ?>" class="btnTimKiem">Cập nhập</Button></td>
                                  <?php $check++; } 
                                  ?><?php } if($check ==0 )
                                  {?>
                                    <td><?= $stt?></td>
                                    <td class="mamon<?= $stt ?>" id="<?= $info['mamon'] ?>" name="mamon"><?= $info['mamon']?></td>
                                    <td class="tenmon<?= $stt ?>" id="<?= $info['tenmon'] ?>" name="tenmon"><?= $info['tenmon']?></td>
                                    <td >
                                      <select class="form-control" style="width: 50%"  id="magiangvien<?= $stt?>"  >
                                      <option value="">Hiện tại chưa có giáo viên nào</option>
                                        <?php
                                          foreach($listGiangVien as $info1)
                                          {
                                            if($info['chuyennganh'] == $info1['chuyennganh'])
                                            {
                                              echo '<option value="'.$info1['magiangvien'].'">'.$info1['hovaten'].'</option>';
        
                                            }
                                            
                                          }
                                        ?>  
                                      </select>
                                    </td>
                                    <td >
                                    <select class="form-control" style="width: 50%"  id="malop<?= $stt?>"  >
                                    <option value="">Không có lớp học nào</option>
                                      <?php
                                        foreach($listLop as $info2)
                                        {
                                          
                                            echo '<option value="'.$info2['malop'].'">'.$info2['tenlop'].'</option>';
      
                                          
                                          
                                        }
                                      ?>  
                                    </select>
                                  </td>
                                    <td><Button id="<?= $stt ?>" class="btnTimKiem">Cập nhập</Button></td>
                                   <?php } ?>
                                    
                                    
                                
                            
                          </tr>
                          <script>
                    $(document).ready(function() {
                        $("#<?= $stt ?>").click(function() {
                            var mamon = ".mamon" + $(this).attr("id");
                            var tenmon = ".tenmon" + $(this).attr("id");
                            var magiangvien=$('#magiangvien<?= $stt?>').val();
                            var malop=$('#malop<?= $stt?>').val();
                            var infomamon = $(`${mamon}`).attr('id');
                            var infotenmon = $(`${tenmon}`).attr('id');
                           
                            
                            if(malop == null || malop == "")
                            {
                              alert("Lớp học không được để trống");
                              return;
                            }
                            else if(magiangvien == null || magiangvien == "")
                            {
                              alert("Giáo viên không được để trống");
                              return;
                            }
                            else{
                              $.get("./index.php", {
                                  controller: "daotao",
                                  action: "capnhatmonhoc",
                                  magiangvien: magiangvien,
                                  mamon: infomamon,
                                  tenmon: infotenmon,
                                  malop: malop
                              }, function(data) {
                                  $("#bangdiem").html(data);
                                  alert("Cập nhật thành công");
                              })
                            }
                            
                        });
                    });
                  </script>
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
</div>

<!-- End Right -->
</div>
<!-- End Page -->


</body>

</html>