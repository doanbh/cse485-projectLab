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
                <form method="post" action="checkRegister.php" role="login">
                    <img src="images/logoWeb.png" class="img-responsive" alt=""/>

                    <input type="text" name="txtName" placeholder="Họ tên" required class="form-control input-lg"/>

                    <input type="email" name="txtEmail" placeholder="Email" required class="form-control input-lg"
                           value="@wru.vn"/>

                    <input type="text" name="txtNumPhone" placeholder="Số điện thoại" required class="form-control input-lg"/>

                    <input type="password" name="txtPassword" class="form-control input-lg" id="password"
                           placeholder="Nhập mật khẩu" required=""/>

                    <input type="password" name="re_password" class="form-control input-lg" id="re_password"
                           placeholder="Nhập lại mật khẩu" required=""/>


                    <div class="pwstrength_viewport_progress"></div>


                    <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Đăng kí</button>

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