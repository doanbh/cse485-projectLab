<?php include "checkAddStudent.php"; ?>
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
                    <form id="stu-master-form" action="add_student.php" method="post">
                        <h2 class="page-header edusec-page-header-1">
                            <i class="fa fa-info-circle"></i> Thông tin chi tiết </h2>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group field-user-user_first_name required">
                                    <label class="control-label" for="user-user_first_name">Họ tên</label>
                                    <input type="text" id="user-user_first_name" class="form-control"
                                           name="ho_va_ten" aria-required="true" value="<?php echo $ten ?>">

                                    <div class="help-block"><?php echo $loi_ten ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group field-user-user_gender">
                                    <label class="control-label" for="user-user_gender">Giới tính</label>
                                    <select id="user-user_gender" class="form-control" name="gender">
                                        <option value="">--- Chọn giới tính ---</option>
                                        <option value="1" <?php echo ($gender == 1) ? 'selecter':'' ?>>Nam</option>
                                        <option value="2" <?php echo ($gender == 2) ? 'selecter':'' ?>>Nữ</option>
                                    </select>

                                    <div class="help-block"><?php echo $loi_gender ?></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group field-user-user_login_id required">
                                    <label class="control-label" for="user-user_login_id">Email</label>
                                    <input type="text" id="user-user_login_id" class="form-control"
                                           name="email" maxlength="60" aria-required="true" value="<?php echo $email ?>">

                                    <div class="help-block"><?php echo $loi_email ?></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group field-user-user_mobile">
                                    <label class="control-label" for="user-user_mobile">Số điện thoại</label>
                                    <input type="text" id="user-user_mobile" class="form-control"
                                           name="sdt" maxlength="12" value="<?php echo $sdt ?>">

                                    <div class="help-block"><?php echo $loi_sdt ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group field-user-user_dob">
                                    <label class="control-label" for="user-user_dob">Ngày sinh</label>
                                    <input type="date" id="user-user_dob" class="form-control" name="birth" value="<?php echo $birth ?>">
                                    <div class="help-block"><?php echo $loi_birth ?></div>
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
                                            name="khoa_hoc" aria-required="true">
                                        <option value="">--- Chọn Khóa học ---</option>
                                        <? 
                                        include "database.php";
                                        $sql_kh = "SELECT * FROM `course`";
                                        $result = mysqli_query($conn, $sql_kh);

                                        while($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <option value="<?php echo $row["id_course"]; ?>"><?php echo $row["name_course"]; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                    <div class="help-block"><?php echo $loi_khoa_hoc ?></div>
                                </div>
                            </div>
                        </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-create" name="add_student">Thêm</button>
                    <a class="btn btn-default btn-create" href="add_student.php">Hủy</a></div>
                <!-- /.box-footer-->
                </form>
            </div>
        </section>
    </div>
</div>
<?php include "footer.php"; ?>
</body>
</html>