<?php
include 'database.php';
$sql_sl_sv = "SELECT * FROM student INNER JOIN course ON student.course_sv = course.id_course ";
$results = mysqli_query($conn, $sql_sl_sv);
$count = "SELECT COUNT(1) FROM student";
$num_count = mysqli_query($conn, $count);
$row = mysqli_fetch_assoc($num_count);
$sl = $row['COUNT(1)'];
?>
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
                <i class="fa fa-th-list"></i> Quản lí |
                <small>Sinh viên</small>
            </h1>
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i>Trang chủ</a></li>
                <li><a href="/student/default/index">Quản lí sinh viên</a></li>
            </ul>
        </section>
        <section class="content">
            <div class="box box-solid" id="list_sv">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fas fa-users"></i> Danh sách sinh viên</h3>
                </div>
                <div class="box-body table-responsive">
                    <div id="p0" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="10000">
                        <div id="w1" class="grid-view">
                            <div class="summary"><span style="font-weight: bold;">Danh sách <?php echo $sl ?> kết quả</span></div>
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>
                                        <a href="sort=course_name"
                                           data-sort="course_name">Mã sinh viên</a></th>
                                    <th>
                                        <a href="" sort=course_code"
                                           data-sort="course_code">Tên sinh viên</a></th>
                                    <th>
                                        <a href="" sort=course_alias"
                                           data-sort="course_alias">Khóa học</a></th>
                                    <th>
                                        <a href="" sort=is_status"
                                           data-sort="is_status">Email</a></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (mysqli_num_rows($results) > 0)
                                {
                                    $i = '1';
                                    while($row = mysqli_fetch_assoc($results)) {
                                        ?>
                                        <tr data-key="4">
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row['id_sv']; ?></td>
                                            <td><?php echo $row['hoten_sv']; ?></td>
                                            <td><?php echo $row['name_course']; ?></td>
                                            <td><?php echo $row['email_sv']; ?></td>
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                }
                                else {
                                    ?>
                                    <tr data-key="4">
                                        <td colspan="5" style="padding: 20px 120px 10px;">
                                            <p style="background:#ff4d4d; color: #fff; text-align: center; height: 35px;border-radius: 5px;line-height: 35px;font-size: 14px;">Chưa có sinh viên nào</p>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div>


        </section>
    </div>
    <?php include "footer.php"; ?>
</div>
</body>
</html>