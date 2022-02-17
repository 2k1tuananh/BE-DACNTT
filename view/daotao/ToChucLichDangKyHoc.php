<?php require_once('./view/layouts/headerDaoTao.php'); ?>

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

  .chuyen-nganh {
    display: flex;
    font-size: 16px;
    margin-bottom: 15px;

  }

  .list-monhoc {

    font-size: 16px;
  }

  .list-monhoc ul {
    list-style-type: none;
  }

  .ngay-dky {
    margin-top: 15px;
    font-size: 16px;
    display: flex;
    gap: 2rem;
  }

  .ngay-bdau {
    display: flex;
    gap: 5px;
  }

  .ngay-ketthuc {
    display: flex;
    gap: 5px;
  }

  .btn-xacnhan {
    z-index: 1;
    position: relative;
    font-size: inherit;
    font-family: inherit;
    color: white;
    padding: 1em 1.5em;
    margin-top: 10px;
    outline: none;
    border: none;
    border-radius: 5px;
    background-color: hsl(236, 32%, 26%);
    overflow: hidden;
    transition: color 0.4s ease-in-out;
  }

  .btn-xacnhan::before {
    content: '';
    z-index: -1;
    position: absolute;
    top: 100%;
    left: 100%;
    width: 1em;
    height: 1em;
    border-radius: 50%;
    background-color: #a0da03;
    transform-origin: center;
    transform: translate3d(-50%, -50%, 0) scale3d(0, 0, 0);
    transition: transform 0.45s ease-in-out;
  }

  .btn-xacnhan:hover {
    cursor: pointer;
    color: #161616;
  }

  .btn-xacnhan:hover::before {
    transform: translate3d(-50%, -50%, 0) scale3d(15, 15, 15);
  }
</style>


<!-- Right -->
<div id="right" style="width: 100%; margin-left:10px;">
  <div class="title">
    Tổ chức lịch đăng ký học cho sinh viên
  </div>
  <div class="chuyen-nganh">
    <p>Chọn chuyên ngành:</p>
    &nbsp;
    <select class="form-control" style="width:30%">
      <option>Công nghệ thông tin</option>
      <option>Tài chính ngân hàng</option>
      <option>Khoa học máy tính</option>
    </select>
  </div>
  <form action="" method="POST">
    <div class="list-monhoc">
      <p>Chọn môn học:</p>

      <ul>
        <?php $i = 0;
        foreach ($data as $value) { ?>
          <li>
            <input name="check[]" value="<?= $value['mamon'] ?>" type="checkbox">
            <?= $value['tenmon'] ?>
          </li>
        <?php } ?>
      </ul>
    </div>
    <div class="ngay-dky">
      <div class="ngay-bdau">
        <p>Ngày bắt đầu:</p>
        <input name="ngaybatdau" class="form-control" type="datetime-local" />
      </div>
      <div class="ngay-ketthuc">
        <p>Ngày kết thúc:</p>
        <input name="ngayketthuc" class="form-control" type="datetime-local" />
      </div>

    </div>
    <button name="xacnhanlich" class="btn-xacnhan btnTimKiem">Xác nhận</button>
  </form>

</div>
</div>

<!-- End Right -->
</div>
<!-- End Page -->




</body>

</html>