<?php if (!isset($_SESSION['role_id']) or $_SESSION['role_id'] != "2") {
  header('location:index.php?controller=login&action=login');
} ?>
<html>

<head>
  <title> </title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./view/js/tooltip.js"></script>
  <script type="text/javascript" src="./view/js/thickbox-compressed.js"></script>
  <script src="./view/js/java.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('input.number').keypress(function(e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          return false;
        }
      });
    });
  </script>

  <link href="./App_Themes/abrasive/a10777.css" type="text/css" rel="stylesheet" />
  <link href="./App_Themes/abrasive/em.css" type="text/css" rel="stylesheet" />
  <link href="./App_Themes/abrasive/jQuery.css" type="text/css" rel="stylesheet" />
  <link href="./App_Themes/abrasive/style.css" type="text/css" rel="stylesheet" />
  <link href="./App_Themes/abrasive/thickbox.css" type="text/css" rel="stylesheet" />
  <style>
    .flex {
      display: flex;
      justify-content: space-between;
    }

    .glot-sub-active {
      color: #1296ba !important;
    }

    .glot-sub-hovered {
      color: #1296ba !important;
    }

    .glot-sub-clzz {
      cursor: pointer;

      line-height: 1.2;
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
      text-shadow: 0px 1px 4px black;
      padding: 0 8px;

      line-height: 1.2;
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
      text-shadow: 0px 1px 4px black;
      padding: 2px 8px;

      line-height: 1.2;
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

    .table {
      color:
        #333333;
      /* display:
        table-cell; */
      font-size:
        12px;
      line-height:
        21.6px;
    }

    .btnUpdate {
      color: #fff;
      margin-top: 15px;
      margin-left: 2px;
      padding: 8px 15px;
      border: none;
      border-radius: 5px;
      background-color: rgb(15, 141, 3);
    }

    .btnUpdate:hover {
      /* color: #ccc; */
      cursor: pointer;
      opacity: 0.7;
    }

    .avatar {
      flex: 1;
    }

    .information {
      margin-left: 20px;
      flex: 2;
    }
  </style>
</head>

<body>
  <!-- Top -->
  <div id="head">
    <!-- Center COntent -->
    <div class="center">
      <!-- Logo -->
      <div class="logo">
        <img width=" 150px" ; height="150px" src="./App_Themes/abrasive/logo.PNG" alt="">
      </div>
      <!-- End Logo -->
      <!-- User Info -->
      <div class="right">
        <b>Chào
          <span id="ctl00_lbUser" style="color: Red"><?php echo $_SESSION['name']; ?> (<?php
                                                                                        if (isset($_SESSION['msv'])) {
                                                                                          echo $_SESSION['msv'];
                                                                                        } else {
                                                                                          echo $_SESSION['mgv'];
                                                                                        }

                                                                                        ?>)</span></b>
        | <a style=" text-decoration: none;" href="?controller=login&action=doimk">Đổi mật khẩu</a> |
        <a style=" text-decoration: none;" href="?controller=login&action=logout">Đăng xuất</a><br />

        <!-- End User Info -->
        <!-- Menu -->
        <div id="menu">
          <ul>
            <li>
              <a style=" text-decoration: none;" class="active" href="#">Trang chủ giáo viên</a>
            </li>
            <li><a style=" text-decoration: none;" href="http://thanglong.edu.vn/">Trang chủ nhà trường</a></li>


            <li>
              <b><a style=" text-decoration: none;" class="msg" href="#"> Có 0 tin báo mới </a></b>
            </li>
          </ul>
        </div>
        <!-- End Menu -->
      </div>
      <!-- End Center Content -->
    </div>
    <!-- End Top -->
    <!-- Page -->
    <div id="page">
      <div id="left">
        <ul>
          <li>
            <h3 class="title">Toàn trường</h3>

            <ul class="sub-menu" style="display: block">
              <li>
                <a style=" text-decoration: none;" href="?controller=login">
                  Thời khóa biểu toàn trường</a>
              </li>

            </ul>
          </li>

          <li>
            <h3 class="title">Góc giáo viên</h3>

            <ul class="sub-menu" style="display: block">
              <li>
                <a style=" text-decoration: none;" href="?controller=personal_information">
                  Thông tin cá nhân</a>
              </li>

            </ul>
          </li>
          <li>
            <h3 class="title">Góc sinh viên</h3>

            <ul class="sub-menu" style="display: block">

              <li><a style=" text-decoration: none;" href="?controller=point&action=QLHocSinhTheoMonHoc">Quản lý sinh viên</a></li>

              <li>
                <a style=" text-decoration: none;" href="?controller=point">Quản lý điểm</a>
              </li>

            </ul>
          </li>

          <li></li>
        </ul>
      </div>