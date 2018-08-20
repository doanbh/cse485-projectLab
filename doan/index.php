<!DOCTYPE html>
<html>
<head>
    <title>Quản lý khóa học</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style_home.css">
</head>
<body>

<?php include "header.php"; ?>
<div class="example">
    <div class="container">
        <div class="row">

            <div class="bdk">
                <p>Bảng điều khiển</p>
            </div>

            <div class="gt">
                <p>
                    <span class="hello">Xin chào <?php if (isset($_SESSION['email'])){echo $_SESSION["email"];}?></span>
                    <span class="times">Thứ 5, Ngày 15/08/2018 </span>
                </p>
                <p class="name_ht">Hệ thống quản lý Khóa học dành cho giáo viên Đại Học Thủy Lợi </p>
            </div>

            <div class="col-md-12 col-12 ndc">
                <div class="col-md-6">
                    <div class="nd_tb">
                        <div class="nd_tb_tt">
                            <p><a href="manager_notification.php" style="color: black">Thông báo</a></p>
                        </div>
                        <div class="nd_tb_nd">
                            <?php
                            include 'database.php';
                            $sql_tb = 'SELECT * FROM `teacher` INNER JOIN notification ON teacher.id =  notification.id_gv INNER JOIN course ON notification.id_kh =  course.id_course';

                            $results = mysqli_query($conn, $sql_tb);
                            if (mysqli_num_rows($results)){
                            $i = 1;
                            while($row = mysqli_fetch_assoc($results)) {
                            ?>
                            <div class="box-tb">
                                <img src="images/user.png">
                                <div class="box-tb-tt">
                                    <span class="type_tt"><?php echo $row['name_course'] ?></span>
                                    <span class="time_tt"><?php echo $row['date_noti'] ?></span>
                                </div>
                                <div class="nd_tt"><?php echo $row['name_noti'] ?></div>
                            </div>
                                <?
                                $i++;
                            }
                            }

                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="nd_tg">
                        <div class="nd_tg_tt">
                            <p><a href="help_manager.php" style="color: black">Trợ giúp</a></p>
                        </div>

                        <div class="nd_tg_nd">
                            <div class="box-tg">
                                <div class="box-tg-tt">
                                    <span class="type_tt">Tiêu đề hỏi: Hỏi về CSS</span>
                                    <span class="time_tt">Tháng 8 20, 2018</span>
                                </div>
                                <div class="nd_tt"><b>Doanbh:</b> Cho hỏi về cách CSS ...</div>
                            </div>
                            <div class="box-tg">
                                <div class="nd_tt" style="text-align: center;">
                                    <a href="help_manager.php">Xem thêm >>></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 col-12 ndc">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> Danh sách khóa học</h3>
                    </div>
                    <div class="box-body table-responsive">
                        <div id="p0" data-pjax-container="" data-pjax-push-state data-pjax-timeout="10000">
                            <div id="w1" class="grid-view">
                                <div class="summary">Hiển thị <b>1-1</b> của <b>1</b> trang.</div>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>
                                            <a href="" sort=academic_name"
                                               data-sort="academic_name">Tên khóa học</a></th>
                                        </th>
                                        <th>
                                            <a href="" sort=start_date"
                                               data-sort="start_date">Ngày bắt đầu</a></th>
                                        <th>
                                            <a href="" sort=end_date"
                                               data-sort="end_date">Ngày kết thúc</a></th>
                                        <th style="text-align: center">
                                            <a href="" sort=is_active"
                                               data-sort="is_active">Trạng thái</a></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql_kh = "SELECT * FROM `course`";
                                    $result = mysqli_query($conn, $sql_kh);
                                    if (mysqli_num_rows($result)){

                                        while($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr data-key="5">
                                                <td><?php echo $row['id_course'] ?></td>
                                                <td><?php echo $row['name_course'] ?></td>
                                                <td><?php echo $row['start_date'] ?></td>
                                                <td><?php echo $row['end_date'] ?></td>
                                                <td><?php if ($row['status_course']==0){echo 'Không hoạt động';}else{echo 'Hoạt động';} ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else {
                                        ?>
                                        <tr data-key="4">
                                            <td colspan="5" style="padding: 20px 120px 10px;">
                                                <p style="background:#ff4d4d; color: #fff; text-align: center; height: 35px;border-radius: 5px;line-height: 35px;font-size: 14px;">Hiện tại chưa có khóa học nào</p>
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
                </div><!-- /.box-->

        </div>
    </div>
    <?php include "footer.php"; ?>

</body>
</html>