<div class="modal-dialog" style="width: 60%;">
<!-- Modal content chi tiết-->
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
                        <p><?=$info['masinhvien']?></p>
                    </td>
                </tr>
                <td class="modal-td" width="50%">Giới tính:</td>
                <td class="modal-td">
                    <p><?=$info['gioitinh']?></p>
                </td>
                </tr>
                <tr>
                    <td class="modal-td" width="50%">Số CMND/CCCD:</td>
                    <td class="modal-td">
                        <p><?=$info['cmnd']?></p>
                    </td>
                </tr>
                <tr>
                    <td class="modal-td" width="50%">Ngày sinh:</td>
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
                    <td class="modal-td">Email SV:</td>
                    <td class="modal-td">
                        <p><?=$info['email']?></p>
                    </td>
                </tr>
                <tr>
                    <td class="modal-td">Chuyên Ngành:</td>
                    <td class="modal-td">
                        <p><?=$info['chuyennganh']?></p>
                    </td>
                </tr>
                <tr>
                    <td class="modal-td">Giáo viên CN:</td>
                    <td class="modal-td">
                        <p><?=$info['hvt']?></p>
                    </td>
                </tr>

                <tr>
                    <td class="modal-td">Địa chỉ :</td>
                    <td class="modal-td">
                        <p><?=$info['diachi']?></p>

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
                                    <<?php
                                    $stt=1;
                                    foreach($data as $value){ ?>
                                        <tr>
                                        <td><?php echo $stt++;?></td>
                                        <td><?php echo $value['mamon'];?></td>
                                        <td><?php echo $value['tenmon'];?></td>
                                        <td align="center"><?php echo $value['sotinchi'];?></td>
                                        <td align="center"><?php echo $value['diemquatrinh'];?></td>
                                        <td align="center"><?php echo $value['diemcuoiky'];?></td>
                                        <td align="center"><?php echo $value['diemtongket'];?></td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <b>Tổng số tín chỉ tích lũy: </b><span> <?php echo $tongtin['tongtin']; ?></span>
        <br/>
        <b>Trung bình chung tích lũy: </b><span ><?php echo round($tongdiem['tongdiem']/$tongtin['tongtin'],2); ?></span>
        <br />
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
    </div>