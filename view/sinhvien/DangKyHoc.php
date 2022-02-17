<?php require_once('./view/layouts/headerSinhVien.php'); ?>
<!-- Right -->
<div id="right">
    <div class="title">Danh sách các môn học được đăng kí</div>
    <div class="entry">
        <div id="ctl00_c_ThongbaoPanel" class="thongbao">
            <h3>Thông báo thời gian đăng ký học:</h3>
            Nếu được đăng ký sẽ hiển thị thời gian đăng ký học ở đây.Còn nếu ko
            thì hiển thị Bạn không thuộc đối tượng đăng ký kì này
        </div>
        <div class="big-notice">
            Bạn chưa được đăng ký học

            <br />
        </div>
        <p style="text-align: center; font-weight: bold">
            Danh sách môn được đăng ký
        </p>
        <div style="margin-bottom:30px;">
            <!-- style="width: 730px; height: 430px" -->
            <table class="tabletkb" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 40px">STT</th>
                        <th style="width: 40px"></th>
                        <th style="width: 160px">Tên môn</th>
                        <th style="width: 80px">Thứ</th>
                        <th style="width: 40px">Ca</th>
                        <th style="width: 80px">Số TC</th>
                        <th style="width: 80px">Giá tiền</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="
                      width: 30px;
                      text-align: center;
                      border-left: 1px solid #ccc;
                    ">
                            1
                        </td>
                        <td style="text-align: center">
                            <input id="check" style="
                        font-size: 20px;
                        width: 20px;
                        height: 20px;
                      " type="checkbox" />
                        </td>
                        <td id="tenmon1111" style="text-align: center" ><p id="tenmon1111"> tin</p></td>
                        <td style="text-align: center">2</td>
                        <td style="text-align: center">2</td>
                        <td style="text-align: center">3</td>
                        <td style="text-align: center">1.200.000</td>
                        <td style="text-align: center">Chưa đăng ký</td>
                        <script>
                        $(function(){
                        $('#check').trigger('change'); //This event will fire the change event. 
                            $('#check').change(function(){
                                var data= "$(this).val()";
                                alert(data);
                                if(check.checked == true){
                                    var machuyennganh=$('#tenmon1111').val();
                                    alert(machuyennganh);
                                }
                                $.get("./index.php",{controller:"daotao",action:"bangchuyennganh", info:data}, function(data) {
                                $("#bangdiem1").html(data);
                            })                                                                                     
                        });
                    });
                        </script>
                    </tr>
                    
                </tbody>
            </table>
        </div>

        <div id="LopHocPhan"></div>
        <div id="TKB">
            <div id="dkh_msg"></div>
            <p style="text-align: center; font-weight: bold">
                Danh sách môn đã đăng ký
            </p>
            <div style="width: 730px; height: 430px;margin-bottom:50px;">
                <table class="tabletkb" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>

                            <th style="width: 40px">STT</th>

                            <th style="width: 160px">Tên môn</th>
                            <th style="width: 80px">Thứ</th>
                            <th style="width: 80px">Ca</th>


                        </tr>
                    </thead>
                    <tbody>
                        <td style="
                      width: 30px;
                      text-align: center;
                      border-left: 1px solid #ccc;
                    ">
                            1
                        </td>

                        <td style="text-align: center">Tin đại cương</td>
                        <td style="text-align: center">2</td>
                        <td style="text-align: center">3</td>
                        </tr>
                        <tr>
                            <td style="
                      width: 30px;
                      text-align: center;
                      border-left: 1px solid #ccc;
                    ">
                                2
                            </td>

                            <td style="text-align: center">PHP</td>
                            <td style="text-align: center">2</td>
                            <td style="text-align: center">3</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- End Right -->
</div>
<!-- End Page -->
<!-- Footer -->
<div id="footer">
    Địa chỉ: Đường Nghiêm Xuân Yêm - Đại Kim - Hoàng Mai - Hà Nội<br />
    Điện thoại hỗ trợ kỹ thuật:(04) 355 92 678 website
    <a href="http://www.thanglong.edu.vn">http://www.thanglong.edu.vn</a>
    mail:<a href="mailto:p.cntt@thanglong.edu.vn">p.cntt@thanglong.edu.vn</a><a href="http://atgo.vn/member/svgo/QTM2NjQzfDExLzEyLzIwMDF8TkdVWeG7hE4gVEnhur5OfFTDgEl8fGFuaHRhaWJudm4xMjExMjAwMUBnbWFpbC5jb218Q2jGsGEgY8OzfENoxrBhIGPDsw==">.</a>
</div>
<!-- End Footer -->