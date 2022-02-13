<?php require_once ('./view/layouts/headerSinhVien.php');?>
      <!-- Right -->
      <div id="right">
        <div class="title">Lịch thi sinh viên</div>
        <div class="entry">
          <br />
          <form action="?" method="get">
            Chọn học kỳ:
            <select name="id">
              <option value="121">Học kỳ I nhóm 3 năm 2019 - 2020</option>

              <option value="127">Học kỳ III nhóm 3 năm 2019 - 2020</option>

              <option value="129">Học Kỳ I Nhóm 2 năm 2020 - 2021</option>

              <option value="133">Học Kỳ II Nhóm 2 năm 2020 - 2021</option>

              <option value="136">Học Kỳ III Nhóm 2 năm 2020 - 2021</option>

              <option value="140">Học kỳ I Nhóm 3 năm 2021 - 2022</option>

              <option value="139">Học kỳ I Nhóm 2 năm 2021 - 2022</option>
            </select>
            <input type="submit" class="fr" value="Gửi đi" />
          </form>
          <br />
          <div id="ctl00_c_start">
            <table cellpadding="0" cellspacing="0" width="720px">
              <tbody>
                <tr>
                  <td colspan="3" align="center"><h3>PHIẾU DỰ THI</h3></td>
                </tr>
                <tr>
                  <td colspan="3" align="center">
                    (<span id="ctl00_c_lbNhom"
                      >Học Kỳ I Nhóm 2 năm 2020 - 2021</span
                    >)<br /><br />
                  </td>
                </tr>
                <tr>
                  <td>Mã sinh viên: <span id="ctl00_c_lbMaSV">a36643</span></td>
                  <td>
                    Họ và tên: <span id="ctl00_c_lbTenSV">NGUYỄN TIẾN TÀI</span>
                  </td>
                  <td>Lớp: <span id="ctl00_c_lbLop">TT32h4</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <br />

          <table
            class="tablesv"
            cellpadding="0"
            cellspacing="0"
            style="
              font-size: 14px;
              font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            "
          >
            <thead>
              <tr>
                <th>STT</th>
                <th>Mã học phần</th>
                <th>Tên học phần</th>
                <th>Hình thức thi</th>
                <th>Ngày thi</th>
                <th>Giờ thi</th>
                <th>Tình trạng</th>
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
    <!-- Footer -->
    <div id="footer">
      Địa chỉ: Đường Nghiêm Xuân Yêm - Đại Kim - Hoàng Mai - Hà Nội<br />
      Điện thoại hỗ trợ kỹ thuật:(04) 355 92 678 website
      <a href="http://www.thanglong.edu.vn">http://www.thanglong.edu.vn</a>
      mail:<a href="mailto:p.cntt@thanglong.edu.vn">p.cntt@thanglong.edu.vn</a
      ><a
        href="http://atgo.vn/member/svgo/QTM2NjQzfDExLzEyLzIwMDF8TkdVWeG7hE4gVEnhur5OfFTDgEl8fGFuaHRhaWJudm4xMjExMjAwMUBnbWFpbC5jb218Q2jGsGEgY8OzfENoxrBhIGPDsw=="
        >.</a
      >
    </div>
    <!-- End Footer -->
  </body>
</html>
