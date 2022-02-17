<?php require_once('./view/layouts/headerSinhVien.php'); ?>
<!-- Right -->
<div id="right" style="width: 100%; margin-left:10px;">
  <div class="title">Lịch thi sinh viên</div>
  <div class="entry">
    <div id="ctl00_c_start">
      <table cellpadding="0" cellspacing="0" style="width: 100%;">
        <tbody>
          <tr>
            <td colspan="3" align="center">
              <span style="font-weight: bold; font-size:18px;">PHIẾU DỰ THI</span>
            </td>
          </tr>
          <tr>
            <td style="font-size:18px;">Mã sinh viên: <span id="ctl00_c_lbMaSV"><?= $data['masinhvien'] ?></span></td>
            <td style="font-size:18px;">
              Họ và tên: <span id="ctl00_c_lbTenSV"><?= $data['hovaten'] ?></span>
            </td>
            <td style="font-size:18px;">Lớp: <span id="ctl00_c_lbLop"><?= $data['lop'] ?></span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <br />

    <table class="tablesv" cellpadding="0" cellspacing="0" style="
              font-size: 18px;
              font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
              width:100%
            ">
      <thead>
        <tr>
          <th  class="text-center">STT</th>
          <th  class="text-center">Mã học phần</th>
          <th  class="text-center">Tên học phần</th>
          <th  class="text-center">Hình thức thi</th>
          <th  class="text-center">Ngày thi</th>
          <th  class="text-center">Giờ thi</th>
          <th  class="text-center">Tình trạng</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td style="text-align: center">
            <span id="ctl00_c_rptSV_ctl01_lbSTT">1</span>
          </td>
          <td style="text-align: center">ML202</td>
          <td style="text-align: center">Tư tưởng Hồ Chí Minh</td>
          <td style="text-align: center">Online</td>
          <td style="text-align: center">25/11/2020</td>
          <td style="text-align: center"></td>
          <td style="text-align: center"></td>
        </tr>

        <tr>
          <td style="text-align: center">
            <span id="ctl00_c_rptSV_ctl02_lbSTT">2</span>
          </td>
          <td style="text-align: center">MI201</td>
          <td style="text-align: center">Toán rời rạc</td>
          <td style="text-align: center">Online</td>
          <td style="text-align: center">03/12/2020</td>
          <td style="text-align: center"></td>
          <td style="text-align: center"></td>
        </tr>

        <tr>
          <td style="text-align: center">
            <span id="ctl00_c_rptSV_ctl03_lbSTT">3</span>
          </td>
          <td style="text-align: center">CS212</td>
          <td style="text-align: center">Kiến trúc máy tính</td>
          <td style="text-align: center">Online</td>
          <td style="text-align: center">07/12/2020</td>
          <td style="text-align: center"></td>
          <td style="text-align: center"></td>
        </tr>

        <tr>
          <td style="text-align: center">
            <span id="ctl00_c_rptSV_ctl04_lbSTT">4</span>
          </td>
          <td style="text-align: center">CS224</td>
          <td style="text-align: center">Lập trình .Net</td>
          <td style="text-align: center">Online</td>
          <td style="text-align: center">07/12/2020</td>
          <td style="text-align: center"></td>
          <td style="text-align: center"></td>
        </tr>

        <tr>
          <td style="text-align: center">
            <span id="ctl00_c_rptSV_ctl05_lbSTT">5</span>
          </td>
          <td style="text-align: center">MA231</td>
          <td style="text-align: center">Xác suất thống kê ứng dụng</td>
          <td style="text-align: center">Online</td>
          <td style="text-align: center">10/12/2020</td>
          <td style="text-align: center"></td>
          <td style="text-align: center">CT</td>
        </tr>

        <tr>
          <td style="text-align: center">
            <span id="ctl00_c_rptSV_ctl06_lbSTT">6</span>
          </td>
          <td style="text-align: center">PG120</td>
          <td style="text-align: center">Thể dục cơ bản nâng cao</td>
          <td style="text-align: center">Online</td>
          <td style="text-align: center">12/12/2020</td>
          <td style="text-align: center"></td>
          <td style="text-align: center"></td>
        </tr>
      </tbody>
    </table>

    <p></p>
  </div>
</div>

<!-- End Right -->
</div>
<!-- End Page -->


</body>

</html>