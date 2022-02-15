<?php require_once('./view/layouts/headerSinhVien.php'); ?>
<div id="right">
  <div class="title">
    Bảng điểm sinh viên <?php echo $_SESSION['name']; ?> - <?php echo $_SESSION['msv']; ?> - <?php echo $_SESSION['ngaysinh']; ?> - <?php echo $_SESSION['lop']; ?>
  </div>

  <!-- <table cellspacing="3" cellpadding="0" border="0px" width="100%">
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
  </table> -->
  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã HP</th>
                <th>Tên HP</th>
                <th>Số TC</th>
                <th>Điểm quá trình</th>
                <th>Điểm cuối kỳ</th>
                <th>Điểm tổng</th>
            </tr>
        </thead>
        <tbody>
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