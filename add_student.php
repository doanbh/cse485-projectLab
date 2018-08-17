<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style_home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
    <?php include "header.php"; ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <i class="fa fa-plus-square"></i> Thêm
                <small> Sinh viên mới</small>
            </h1>
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i>Trang chủ</a></li>
                <li><a href="/student/default/index">Thêm sinh viên mới</a></li>
            </ul>
        </section>
        <section class="content">

            <div class="box box-solid">

                <div class="box-body">
                    <form id="stu-master-form" action="/student/stu-master/create" method="post">
                        <input type="hidden" name="_csrf"
                               value="RG1TNDFRMkg3XRJzeR0FHh4KInBUGHkrMF8/UEQiVwIJOzRaZBR4Kw==">
                        <h2 class="page-header edusec-page-header-1">
                            <i class="fa fa-info-circle"></i> Thông tin chi tiết </h2>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group field-user-user_first_name required">
                                    <label class="control-label" for="user-user_first_name">Họ tên</label>
                                    <input type="text" id="user-user_first_name" class="form-control"
                                           name="User[user_first_name]" aria-required="true">

                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group field-user-user_gender">
                                    <label class="control-label" for="user-user_gender">Giới tính</label>
                                    <select id="user-user_gender" class="form-control" name="User[user_gender]">
                                        <option value="">--- Chọn giới tính ---</option>
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>
                                    </select>

                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group field-user-user_login_id required">
                                    <label class="control-label" for="user-user_login_id">Email</label>
                                    <input type="text" id="user-user_login_id" class="form-control"
                                           name="User[user_login_id]" maxlength="60" aria-required="true">

                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group field-user-user_mobile">
                                    <label class="control-label" for="user-user_mobile">Số điện thoại</label>
                                    <input type="text" id="user-user_mobile" class="form-control"
                                           name="User[user_mobile]" maxlength="12">

                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group field-user-user_dob">
                                    <label class="control-label" for="user-user_dob">Ngày sinh</label>
                                    <input type="date" id="user-user_dob" class="form-control" name="User[user_dob]">


                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <h2 class="page-header edusec-page-header-1">
                            <i class="fa fa-info-circle"></i> Danh sách khóa học </h2>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group field-stuenrolcourse-sec_admission_year required">
                                    <label class="control-label" for="stuenrolcourse-sec_admission_year">Khóa
                                        học</label>
                                    <select id="stuenrolcourse-sec_admission_year" class="form-control"
                                            name="StuEnrolCourse[sec_admission_year]" aria-required="true">
                                        <option value="">--- Chọn Khóa học ---</option>
                                        <option value="1" selected>Lập trình PHP</option>
                                    </select>

                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-create">Thêm</button>
                    <a class="btn btn-default btn-create" href="/student/stu-master/index">Hủy</a></div>
                <!-- /.box-footer-->

                </form>
            </div>
        </section>
    </div>
</div>
<?php include "footer.php"; ?>
</body>
</html>