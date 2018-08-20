<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body id="body_login">
<div class="container">
    <div class="row" id="pwd-container">
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <section class="login-form">
                <form method="post" action="checkLogin.php" role="login">
                    <img src="images/logoWeb.png" class="img-responsive" alt=""/>
                    <?php
                    if (isset($_GET['f'])) {
                        if ($_GET['f'] == 1) {
                            ?>
                            <p class="canh_bao">Thông tin đăng nhập không đúng</p>
                            <?
                        }
                        if ($_GET['f'] == 2) {
                            ?>
                            <p class="canh_bao">Đăng kí thành công</p>
                            <?
                        }
                    }
                    ?>
                    <input type="email" name="txtEmail" placeholder="Email" required class="form-control input-lg"
                           value="@wru.vn"/>

                    <input type="password" name="txtPassword" class="form-control input-lg" id="password"
                           placeholder="Password" required=""/>


                    <div class="pwstrength_viewport_progress"></div>


                    <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Đăng nhập</button>
                    <div>
                        <a href="register.php">Tạo tài khoản</a> hoặc <a href="#">Quên mật khẩu?</a>
                    </div>

                </form>

                <div class="form-links">
                    <a href="#">www.khoahoc.com</a>
                </div>
            </section>
        </div>

        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>