<?php require_once('./view/layouts/headerGiaoVien.php'); ?>
<style>
    button {
        z-index: 1;
        position: relative;
        font-size: inherit;
        font-family: inherit;
        color: white;
        padding: 0.5em 1em;
        outline: none;
        border: none;
        background-color: hsl(236, 32%, 26%);
    }

    button::before {
        content: '';
        z-index: -1;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #fc2f70;
        transform-origin: center bottom;
        transform: scaleY(0);
        transition: transform 0.25s ease-in-out;
    }

    button:hover {
        cursor: pointer;
    }

    button:hover::before {
        transform-origin: center top;
        transform: scaleY(1);
    }

    .container_timkiem {
        display: flex;
        justify-content: space-between;
    }

    .right_timkiem {
        position: relative;
    }
</style>

<!-- Right -->
<div id="right" style="width:100%; ">
    <div class="title">Nhập điểm sinh viên</div>
    <div class="entry">
        <div class="container_timkiem">
            <div style="display: flex;">
                <span>Chọn môn học:</span>
                <select class="form-control" id="mamon" style="width: 13rem;">
                    <script>
                        $(function() {
                            $('#mamon').trigger('change'); //This event will fire the change event. 
                            $('#mamon').change(function() {
                                var data = $(this).val();
                                $.get("./index.php", {
                                    controller: "point",
                                    Ajax_action: "bangdiem",
                                    info: data
                                }, function(data) {
                                    $("#bangdiem").html(data);
                                })
                            });
                        });
                    </script>
                    <option class="a" id="Tất cả">Tất cả</option>
                    <?php foreach ($mon as $monhoc) { ?>
                        <option class="a"><?php echo $monhoc['tenmon']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div style="display: flex;">
                <td>Chọn học kỳ:</td>
                <td>
                    <select class="form-control" style="width: 13rem;">
                        <option>Kỳ 1 nhóm 1</option>
                        <option>Kỳ 2 nhóm 2</option>
                    </select>
                </td>
            </div>

            <div style="position: relative">
                <input class="form-control" id="timkiem" name="timkiem" style="padding-left: 20px; height: 35px;" type="text" placeholder="Tìm kiếm">
                <button id="bttimkiem" style=" position: absolute;right: 0px; height: 35px;bottom: 0px;top: 0px;padding: 0 10px 0 10px;">
                    Tìm
                </button>
            </div>
        </div>


        <script>
            $(function() {
                $('#bttimkiem').trigger('click'); //This event will fire the change event. 
                $('#bttimkiem').click(function() {
                    var data = $(this).val();
                    $.get("./index.php", {
                        controller: "point",
                        action: "timkiem",
                        info: data
                    }, function(data) {
                        $("#bangdiem").html(data);
                    })
                });
            });
        </script>


        <div style="margin-top: 20px; align-items: flex-end;" class="container_timkiem">
            <div>

                <select class="form-control" id="sapxep">
                    <script>
                        $(function() {
                            $('#sapxep').trigger('change'); //This event will fire the change event. 
                            $('#sapxep').change(function() {
                                var data = $(this).val();
                                $.get("./index.php", {
                                    controller: "point",
                                    action: "sapxep",
                                    info: data
                                }, function(data) {
                                    $("#bangdiem").html(data);
                                })
                            });
                        });
                    </script>
                    <option value="thapcao">Thấp >> cao</option>
                    <option value="caothap">Cao >> thấp</option>
                </select>
            </div>

            <button>Xuất file</button>
        </div>


    </div>
    <div style="margin-top: 10px;" id="bangdiem">
        <table class="grid" cellspacing="0" border="0" id="ctl00_c_GridDC" style="
                          border-style: None;
                          width: 100%;
                          border-collapse: collapse;
                          margin-top:10px
                        ">

            <tr style="background-color: #e4e8e9;">
                <th style="border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;">
                    Họ tên
                </th>
                <th style="border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;">
                    Mã sinh viên
                </th>
                <th style="border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;">
                    Môn học
                </th>
                <th style="border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;">
                    Điểm quá trình
                </th>
                <th style="border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;">
                    Điểm cuối kỳ
                </th>
                <th style="border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;">
                    Điểm tổng kết
                </th>
                <th style="border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;">

                </th>
            </tr>
            <script>
                $(document).ready(function() {
                    $("button.capnhat").click(function() {
                        var masinhvien = ".masinhvien" + $(this).attr("id");
                        var tenmon = ".tenmon" + $(this).attr("id");
                        var diemquatrinh = "#diemquatrinh" + $(this).attr("id");
                        var diemcuoiky = "#diemcuoiky" + $(this).attr("id");
                        var infomsv = $(`${masinhvien}`).attr('id');
                        var infotm = $(`${tenmon}`).attr('id');
                        var infodqt = $(`${diemquatrinh}`).val();
                        var infodck = $(`${diemcuoiky}`).val();
                        if (parseFloat(infodqt) >= 7 && parseFloat(infodck) > parseFloat(infodqt)) {
                            var infodtk = infodck;
                        } else {
                            var infodtk = infodqt * 0.4 + infodck * 0.6;
                        }
                        $.get("./index.php", {
                            controller: "point",
                            action: "updiem",
                            masinhvien: infomsv,
                            diemquatrinh: infodqt,
                            tenmon: infotm,
                            diemcuoiky: infodck,
                            diemtongket: infodtk
                        }, function(data) {
                            $("#bangdiem").html(data);
                        })
                    });
                });
            </script>
            <?php if ($svl != "0") {
                $stt = 0;
                foreach ($svl as $info) {
                    $stt++; ?>
                    <tr>
                        <td class="hovaten<?= $stt ?>" id="<?= $info['hovaten'] ?>" name="hovaten" style="border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;">
                            <?= $info['hovaten'] ?>
                        </td>
                        <td class="masinhvien<?= $stt ?>" id="<?= $info['masinhvien'] ?>" name="masinhvien" style="border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;">
                            <?= $info['masinhvien'] ?>
                        </td>
                        <td class="tenmon<?= $stt ?>" id="<?= $info['tenmon'] ?>" name="tenmon" style="border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;">
                            <?= $info['tenmon'] ?>
                        </td>
                        <td style="border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;">
                            <input id="diemquatrinh<?= $stt ?>" name="diemquatrinh<?= $stt ?>" style="background-color: #f3f6f7; border: none;" value="<?= $info['diemquatrinh'] ?>" type="number" step="0.01" min="0" max="10">
                        </td>
                        <td style="border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;">
                            <input id="diemcuoiky<?= $stt ?>" name="diemcuoiky<?= $stt ?>" t style="background-color: #f3f6f7; border: none;" value="<?= $info['diemcuoiky'] ?>" type="number" step="0.01" min="0" max="10">
                        </td>
                        <td name="diemtongket" style="border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;">
                            <p class="text-center" style="background-color: #f3f6f7; border: none;"><?= $info['diemtongket'] ?></p>
                        </td>
                        <td name="">
                            <button style="margin: 0 2px 0 2px;" class="btn capnhat" id="<?= $stt ?>"> Cập nhật</button>
                        </td>
                    </tr>
            <?php }
            } else {
                echo "<td >Dữ liệu Rỗng </td> ";
            } ?>
    </div>

    </table>
</div>
</div>
</div>

<!-- End Right -->
</div>
<!-- End Page -->
<!-- Footer -->

</body>

</html>