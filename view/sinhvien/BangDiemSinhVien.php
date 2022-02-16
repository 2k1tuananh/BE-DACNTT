<?php require_once('./view/layouts/headerSinhVien.php'); ?>
<div id="right" style="width: 100%; margin-left:10px;">
  <div class="title">
    Bảng điểm sinh viên <?php echo $_SESSION['name']; ?> - <?php echo $_SESSION['msv']; ?> - <?php echo $_SESSION['ngaysinh']; ?> - <?php echo $_SESSION['lop']; ?>
  </div>

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
                  <th class="text-center">STT</th>
                  <th class="text-center" style="white-space: nowrap">
                    Mã HP
                  </th>
                  <th class="text-center">Tên HP</th>
                  <th class="text-center" style="white-space: nowrap">
                    Số TC
                  </th>
                  <th class="text-center">Điểm quá trình</th>
                  <th class="text-center">Điểm thi</th>
                  <th class="text-center">Điểm tổng</th>
                </tr>
                <?php
                $stt = 1;
                foreach ($data as $value) { ?>
                  <tr>
                    <td><?php echo $stt++; ?></td>
                    <td><?php echo $value['mamon']; ?></td>
                    <td><?php echo $value['tenmon']; ?></td>
                    <td align="center"><?php echo $value['sotinchi']; ?></td>
                    <td align="center"><?php echo $value['diemquatrinh']; ?></td>
                    <td align="center"><?php echo $value['diemcuoiky']; ?></td>
                    <td align="center"><?php echo $value['diemtongket']; ?></td>
                  </tr>
                <?php } ?>
                <tr>
                  <td colspan="3"></td>
                  <td colspan="2"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
  <div style="margin-top: 20px;">
    <b>Tổng số tín chỉ tích lũy: </b><span id="ctl00_c_lblTongSoTinChiTichLuy"><?php echo $tongtin['tongtin']; ?></span>
    <br />
    <b>Trung bình chung tích lũy: </b><span id="ctl00_c_lblTrungBinhTrungTichLuy"><?php echo round($tongdiem['tongdiem'] / $tongtin['tongtin'], 2); ?></span>
    <br />
  </div>

</div>
</div>

<!-- End Right -->
</div>
<!-- End Page -->



</body>

</html>