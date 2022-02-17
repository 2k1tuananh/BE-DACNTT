
  <head>
    <title>Login page - Thang Long University</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="./view/vendor/bootstrap/css/bootstrap.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="./view/fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="./view/fonts/iconic/css/material-design-iconic-font.min.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./view/vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="./view/vendor/css-hamburgers/hamburgers.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="./view/vendor/animsition/css/animsition.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="./view/vendor/select2/select2.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="./view/vendor/daterangepicker/daterangepicker.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./view/css/util.css" />
    <link rel="stylesheet" type="text/css" href="./view/css/main.css" />
    <!--===============================================================================================-->
    <link href="css-1?family=Roboto" rel="stylesheet" />

    <script type="text/javascript" language="javascript">
      function OpenGoogleLoginPopup() {
        var url = 'https://accounts.google.com/o/oauth2/auth?';
        url +=
          'scope=https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email&';
        url += 'state=%2Fprofile&';
        url +=
          'redirect_uri=https://login.thanglong.edu.vn/LoginWithGoogle.aspx&';
        url += 'response_type=token&';
        url +=
          'client_id=699195590018-m5fdktcqohcfregj9lp3kq1q6hidbu35.apps.googleusercontent.com';
        window.location = url;
      }
    </script>
        <style>

.bodyBackground {
     background-image: url("./img/background.jpg");
     background-position: center;
     background-size: cover;
     position: absolute;
     top: 0;
 }
 .wrap-login100{
  background-color: #9152f8;
    width: 450px;
    border-radius: 10px;
    overflow: hidden;
    padding: 55px 55px 37px 55px;

    border-radius: 2px;

    box-shadow: 0px 2px 2px rgb(0 0 0 / 30%);
 }
</style>
  </head>
    <div class="limiter bodyBackground">
      <div
        class="container-login100 "
      >
        <div class="wrap-login100">
          <form
            method="post"
            action=""
            id="ctl00"
            class="login100-form validate-form"
          >
            <input
              type="hidden"
              name="__VIEWSTATE"
              id="__VIEWSTATE"
              value="Rd81TgcKntXsEQ9ElI0cDao0ji2/prsWSPXPHPYtspgQ9kaGK90xVkMnIsUHlQEIsDkSA+KCKcOPlQ8FMcyb4YRGQBTbaGyCu9JA0DRNwxQroTGNYL2FN7YQ0NYKzdAdBPYi5+sf08PSjYDhKG5lRtQCdEVMig0n2JMETeJBzYU="
            />

            <input
              type="hidden"
              name="__VIEWSTATEGENERATOR"
              id="__VIEWSTATEGENERATOR"
              value="CA0B0334"
            />
            <input
              type="hidden"
              name="__EVENTVALIDATION"
              id="__EVENTVALIDATION"
              value="r8cq7ZurwTyoCjZjrmRyT6BS8Sjn6Wpf93zIy1K4q5grmjKc2qeXZiTVvEIlJGEv9Xg29EbDtJgC3TZiIZ7pVfWICG4+2Da8G9MJXYXzQ5z6cMebwLuBU8owhnXNPQhUEg94o1hbn8GQ2Qstixjk9cOR6znDG+C5YrHNwoN8tWRXL4RN+N2LuLry0mu67FEr"
            />
            <span class="login100-form-logo">
              <img
                id="profile-img"
                class="profile-img-card"
                src="./view/images/logotlu.jpg"
              />
            </span>

            <span class="login100-form-title p-b-34 p-t-27">Đăng nhập </span>

            <div
              class="wrap-input100 validate-input"
              data-validate="Điền tên đăng nhập"
            >
              <input
                name="tk"
                type="text"
                id="tbUserName"
                class="input100"
                placeholder="Tên đăng nhập"
              />
              <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Điền mật khẩu"
            >
              <input
                name="mk"
                type="password"
                id="tbPassword"
                class="input100"
                placeholder="Mật khẩu"
              />
              <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>

            <div class="contact100-form-checkbox">
              <input
                name="ckb1"
                type="checkbox"
                id="ckb1"
                class="input-checkbox100"
                checked="checked"
              />
              
            </div>

            <div class="container-login100-form-btn">
              <input
                type="submit"
                name="login"
                value="Đăng nhập"
                id="btLogin"
                class="login100-form-btn"
              />
            </div>
            <br />
            <div>
              <a href="?controller=login&action=quenmk" class="text-white"
                >Quên mật khẩu nhấn vào dòng này</a
              >
            </div>
            <br />
           
            <div class="text-center p-t-90">
              <span id="lbResult"></span>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

