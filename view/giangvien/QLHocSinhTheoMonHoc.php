<?php require_once ('./view/layouts/header.php');?>

        <!-- Right -->
        <div id="right" style="width: 75%">
            <div class="title">Quản lý học sinh </div>
            <div class="entry">
                <table width="100%">
                    <tbody>
                        <tr>
                            <td width="30%">Chọn môn học:</td>
                            <td>
                            <select id="mamon" style="width: 13rem;">
                            <script>
                            $(function(){
                                $('#mamon').trigger('change'); //This event will fire the change event. 
                                    $('#mamon').change(function(){
                                        var data= $(this).val();
                                        $.get("./index.php",{controller:"point",action:"sxtheomon", info:data}, function(data) {
                                        $("#bangdiem").html(data);
                                    })                                                                                     
                                });
                            });
                            </script>
                            <option class="a" id="Tất cả">Tất cả</option>
                            <?php foreach ($mon as $monhoc){ ?>
                                <option class="a" id="<?= $monhoc['tenmon']?>"><?php echo $monhoc['tenmon'];?></option>
                            <?php } ?>
                            </select>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div style="
              display: flex;
              justify-content: space-around;
              align-items: flex-end;
              margin-top: 20px;
            ">
                   
                    <script>
                    $(function(){
                        $('#timkiem').trigger('change'); //This event will fire the change event. 
                            $('#timkiem').change(function(){
                                var data= $(this).val();
                                $.get("./index.php",{controller:"point",action:"timkiem1", info:data}, function(data) {
                                $("#bangdiem").html(data);
                            })                                                                                     
                        });
                    });
                    $(function(){
                        $('#bttimkiem').trigger('click'); //This event will fire the change event. 
                            $('#bttimkiem').click(function(){
                                var data= $('#timkiem').val();
                                $.get("./index.php",{controller:"point",action:"timkiem1", info:data}, function(data) {
                                $("#bangdiem").html(data);
                            })                                                                                     
                        });
                    });
                    </script>
                    <div style="position: relative">
                        <i style="
                  position: absolute;
                  left: 4px;
                  bottom: 6px;
                  font-size: 15px;
                  
                " class="fas fa-search"></i>
                        <input id="timkiem" style="padding-left: 20px" type="text" placeholder="Tìm kiếm" />
                        <button id="bttimkiem" style="
                  position: absolute;
                  right: 0px;
                  height: 25px;
                  bottom: 0px;
                  top: 0px;
                  padding: 0 3px 0 3px;
                ">
                            Tìm
                        </button>
                    </div>

                    <div style="
                background-color: #e4e8e9;
                border: 1px solid #545454;
                border-radius: 2px;
                width: 110px;
              ">
                        <i style="padding-left: 5px" class="fas fa-sort"></i>
                        <select id="sapxep" style="border: none; background-color: #e4e8e9;">
                            <script>
                            $(function(){
                                $('#sapxep').trigger('change'); //This event will fire the change event. 
                                    $('#sapxep').change(function(){
                                        var data= $(this).val();
                                        $.get("./index.php",{controller:"point",action:"sxtheotrangthai", info:data}, function(data) {
                                        $("#bangdiem").html(data);
                                    })                                                                                     
                                });
                            });
                            </script>
                            <option>Tất cả</option>
                            <option>Đang Học</option>
                            <option>Cấm thi</option>
                        </select>
                    </div>
                    <button style="
                background-color: #e4e8e9;
                border: 1px solid #545454;
                padding: 3px;
                border-radius: 2px;
              ">
                        Xuất file
                    </button>
                </div>

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    &times;
                                </button>
                                <h4 class="modal-title">Thêm sinh viên</h4>
                            </div>
                            <div class="modal-body">
                                <!-- <p>Some text in the modal.</p> -->
                                <table width="100%">
                                    <tbody class="table">
                                        <tr>
                                            <td width="30%">Họ tên:</td>
                                            <td><input type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td width="30%">Mã SV:</td>
                                            <td><input type="text" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-success" data-dismiss="modal">
                                    OK
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="bangdiem">
                    <table style="
                font-family: arial, sans-serif;
                font-size: 14px;
                border-collapse: collapse;
                width: 100%;
                margin-top: 10px;
              ">
                        <tr style="background-color: #e4e8e9">
                            <th style="
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  ">
                                Mã sinh viên
                            </th>
                            <th style="
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  ">
                                Họ tên
                            </th>
                            <th style="
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  ">
                                Tình trạng
                            </th>
                            <th style="
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  "></th>
                        </tr>
                    <?php foreach($data as $value){ ?>
                        <tr>
                            <td style="
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  ">
                                <?= $value['masinhvien']?>
                            </td>
                            <td style="
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  ">
                                <?= $value['hovaten']?>
                            </td>
                            <td style="
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  ">
                                <select>
                                    <?php if($value['trangthai']==1){?>
                                    <option>Đang học</option>
                                    <option>Cấm thi</option>
                                    <?php } else{?>
                                    <option>Cấm thi</option>
                                    <option>Đang học</option>
                                    <?php } ?> 
                                </select>
                            </td>
                            <td style="
                                 border: 1px solid #dddddd;
                                 text-align: center;
                                 padding: 8px;
                                ">

                                <Button type="button" data-toggle="modal" data-target="#myModal2">
                                    <span style="padding: 5px; ">Đánh Giá</span>
                                </Button>

                                <Button class="chitiet" id="<?= $value['masinhvien']?>" style="margin-left: 5px;" type="button" data-toggle="modal"
                                    data-target="#myModal1">
                                    <span style="padding: 5px; ">Chi Tiêt</span>
                                </Button>

                               
                            </td>
                        </tr>
                        <?php }?>
                        <script>
                        $(document).ready(function(){
                            $("button").click(function(){
                                    var masinhvien=$(this).attr("id")
                                    $.get("./index.php",{controller:"point",action:"QLHocSinhTheoMonHoc", msv:masinhvien}, function(data) {
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

    <!-- Modal chi tiết -->
    <div class="modal fade" id="myModal1" role="dialog">
    </div>



    <!-- Modal đánh giá -->
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
                                <td class="modal-td">Điểm rèn luyện</td>
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




            <!-- Footer -->
            <div id="footer">
                Địa chỉ: Đường Nghiêm Xuân Yêm - Đại Kim - Hoàng Mai - Hà Nội<br />
                Điện thoại hỗ trợ kỹ thuật:(04) 355 92 678 website
                <a href="http://www.thanglong.edu.vn">http://www.thanglong.edu.vn</a>
                mail:<a href="mailto:p.cntt@thanglong.edu.vn">p.cntt@thanglong.edu.vn</a><a
                    href="http://atgo.vn/member/svgo/QTM2NjQzfDExLzEyLzIwMDF8TkdVWeG7hE4gVEnhur5OfFTDgEl8fGFuaHRhaWJudm4xMjExMjAwMUBnbWFpbC5jb218Q2jGsGEgY8OzfENoxrBhIGPDsw==">.</a>
            </div>
            <!-- End Footer -->

            <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset"></div>
            <iframe id="nr-ext-rsicon" style="
        position: absolute;
        display: none;
        width: 50px;
        height: 50px;
        z-index: 2147483647;
        border-style: none;
        background: transparent;
      "></iframe>
</body>

</html>
