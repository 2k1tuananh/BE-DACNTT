<?php if (!isset($_SESSION['role_id']) or $_SESSION['role_id'] != "1") {
  header('location:index.php?controller=login&action=login');
} ?>
<html>

<head>
  <title> </title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

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
    .table {
      color:
        #333333;
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

    .modal-td {
      padding: 20px;
    }

    .active1 {
      background-color: #ff80c3;
    }

    /* .navSV  li:hover  a{
      background-color: #ff80c3;

    } */
    .navSV li a {
      text-decoration: none;

    }

    .red-input:focus {
      background: yellow;
      color: red;
    }

    body {
      font-size: 16px;
      font-family: 'Times New Roman', Times, serif;
    }
    .title{
      font-size: 16px;
      font-family: 'Times New Roman', Times, serif;
    }
    li a {
      font-size: 14px;
      font-family: 'Times New Roman', Times, serif;
    }
  </style>

</head>

<body>
  <!-- Top -->
  <div id="head">
    <!-- Center COntent -->
    <div class="center" style="width: 90%;">
      <!-- Logo -->
      <div class="logo">
        <img width=" 150px" ; height="150px" src="./App_Themes/abrasive/logo.PNG" alt="">
      </div>
      <!-- End Logo -->
      <!-- User Info -->
      <div class="right" style="width: 100%;">
        <b>Chào
          <span id="ctl00_lbUser" style="color: Red;text-transform: uppercase;"><?php echo $_SESSION['name']; ?> (<?php
                                                                                        if (isset($_SESSION['msv'])) {
                                                                                          echo $_SESSION['msv'];
                                                                                        } else {
                                                                                          echo $_SESSION['mgv'];
                                                                                        }

                                                                                        ?>)</span></b>|
        <a style="text-decoration: none;color: #0f8c12" href="#">Sinh viên</a>
        | <a style=" text-decoration: none;" href="?controller=login&action=doimk">Đổi mật khẩu</a> |
        <a style=" text-decoration: none;" href="?controller=login&action=logout">Đăng xuất</a><br />

        <!-- End User Info -->
        <!-- Menu -->
        <div id="menu" style="width: 100%;">
          <ul class="navSV">
            <li>
              <a style=" text-decoration: none;" class="active" style="background-color:#6296C5" href="#">Trang chủ sinh viên</a>
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
    <div id="page" style="width: 90%; display: flex; left: 5%; margin-left: 0px;">
      <div id="left" style="width: 250px">
        <ul class="navSV">
          <li>
            <h3 class="title">Toàn trường</h3>

            <ul class="sub-menu" style="display: block">
              <li class="chon">

                <a style=" text-decoration: none;" href="?controller=tkb">
                  Thời khóa biểu toàn trường
                </a>

              </li>
            </ul>
          </li>

          <li>
            <h3 class="title">Góc sinh viên</h3>

            <ul class="sub-menu" style="display: block">
              <li class="chon">

                <a style="text-decoration: none" href="?controller=personal_information">
                  Thông tin cá nhân</a>


              </li>

              <li>

                <a style=" text-decoration: none;" class="red-input" href="?controller=personal_information&action=DangKyHoc"> Đăng ký học</a>

              </li>

              <li>

                <a style=" text-decoration: none;" href="?controller=personal_information&action=bangdiem"> Bảng điểm</a>

              </li>

              <li>

                <a style=" text-decoration: none;" href="?controller=personal_information&action=lichthisinhvien"> Lịch thi chính thức</a>


              </li>


            </ul>
          </li>

          <li></li>
        </ul>
      </div>