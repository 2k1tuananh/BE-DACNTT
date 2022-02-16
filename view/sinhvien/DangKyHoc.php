<?php require_once('./view/layouts/headerSinhVien.php'); ?>
<!-- Right -->
<div id="right" style="width: 100%; margin-left:10px;">
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
                            <input style="
                        font-size: 20px;
                        width: 20px;
                        height: 20px;
                      " type="checkbox" />
                        </td>
                        <td style="text-align: center">Tin đại cương</td>
                        <td style="text-align: center">2</td>
                        <td style="text-align: center">2</td>
                        <td style="text-align: center">3</td>
                        <td style="text-align: center">1.200.000</td>
                        <td style="text-align: center">Chưa đăng ký</td>
                    </tr>
                    <tr>
                        <td style="
                      width: 30px;
                      text-align: center;
                      border-left: 1px solid #ccc;
                    ">
                            2
                        </td>
                        <td style="text-align: center">
                            <input style="
                        font-size: 20px;
                        width: 20px;
                        height: 20px;
                      " type="checkbox" />
                        </td>
                        <td style="text-align: center">Cấu trúc dữ liệu</td>
                        <td style="text-align: center">4</td>
                        <td style="text-align: center">4</td>
                        <td style="text-align: center">1</td>
                        <td style="text-align: center">400.000</td>
                        <td style="text-align: center">Chưa đăng ký</td>
                    </tr>
                    <tr>
                        <td style="
                      width: 30px;
                      text-align: center;
                      border-left: 1px solid #ccc;
                    ">
                            3
                        </td>
                        <td style="text-align: center">
                            <input style="
                        font-size: 20px;
                        width: 20px;
                        height: 20px;
                      " type="checkbox" />
                        </td>
                        <td style="text-align: center">PHP</td>
                        <td style="text-align: center">6</td>
                        <td style="text-align: center">6</td>
                        <td style="text-align: center">2</td>
                        <td style="text-align: center">800.000</td>
                        <td style="text-align: center">Chưa đăng ký</td>
                    </tr>
                    <tr>
                        <td style="
                      width: 30px;
                      text-align: center;
                      border-left: 1px solid #ccc;
                    ">
                            4
                        </td>
                        <td style="text-align: center">
                            <input style="
                        font-size: 20px;
                        width: 20px;
                        height: 20px;
                      " type="checkbox" />
                        </td>
                        <td style="text-align: center">Công nghệ web</td>
                        <td style="text-align: center">7</td>
                        <td style="text-align: center">7</td>
                        <td style="text-align: center">4</td>
                        <td style="text-align: center">1.600.000</td>
                        <td style="text-align: center">Chưa đăng ký</td>
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
            <div style=" margin-bottom:50px; display:flex; align-items    : center;">
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