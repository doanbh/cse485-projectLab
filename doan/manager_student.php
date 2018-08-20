<?php
include 'database.php';
include 'checkManager.php';
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

    <?php   if (isset($_POST['search_sv'])) { ?>
    <style type="text/css">#list_sv{display: block;} </style>
    <?php   }else{  ?>
    <style type="text/css">
        #list_sv{display: none;}; 
        </style>
    <?php   }  ?>

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

            <div class="box box-solid" id="search_uv">
                <div class="et">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> Tìm kiếm sinh viên</h3>
                        <div class="box-tools">
                            <a class="btn btn-success btn-sm" href="add_student.php"><i
                                    class="fa fa-plus-square"></i> Thêm sinh viên</a></div>
                    </div>
                </div>

                <form id="w0" action="manager_student.php" method="post">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group ">
                                    <label class="control-label"
                                           for="">Năm học</label>
                                    <select id="" class="form-control"
                                            name="nam_hoc">
                                        <option value="">--- Chọn năm học ---</option>
                                        <option value="1">2017-2018</option>
                                    </select>

                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group ">
                                    <label class="control-label" for="">Khóa học</label>
                                    <select id="" class="form-control"
                                            name="khoa_hoc">
                                        <option value="">--- Chọn khóa học ---</option>
                                        <?php
                                        $sql_kh = "SELECT * FROM `course`";
                                        $result = mysqli_query($conn, $sql_kh);

                                        while($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <option value="<?php echo $row["id_course"]; ?>"><?php echo $row["name_course"]; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group ">
                                    <label class="control-label" for="">Trạng thái</label>
                                    <select id="" class="form-control"
                                            name="trang_thai">
                                    <option value="">--- Chọn trạng thái ---</option>
                                    <option value="0">Hoạt động</option>
                                    <option value="1">Không hoạt động</option>
                                    </select>

                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4" style="margin-top: 25px;">
                                <div class="form-group field-stuecdetailsearch-searchgrid">

                                    <input type="text" id="" class="form-control"
                                           name="ma_sv" placeHolder="Nhập mã sinh viên">

                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin-top: 25px;">
                                <div class="form-group">

                                    <input type="text" id="" class="form-control"
                                           name="name_sv"
                                           placeHolder="Nhập tên sinh viên">

                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="col-sm-4" style="margin-top: 25px;">
                                <div class="form-group">

                                    <input type="text" id="" class="form-control"
                                           name="email_sv"
                                           placeHolder="Nhập email sinh viên">

                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- ./box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info" name="search_sv">Tìm kiếm</button>
                        <a class="btn btn-default" href="/student/stu-master/index">Làm lại</a></div>
                </form>
            </div>
            <div class="box box-solid" id="list_sv">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fas fa-users"></i> Danh sách sinh viên</h3>
                </div>
                <div class="box-body table-responsive">
                    <div id="p0" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="10000">
                        <div id="w1" class="grid-view">
                            <div class="summary"><span style="font-weight: bold;">Tìm thấy <?php echo $sl ?> kết quả</span></div>
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
                                           data-sort="course_alias">Tuổi</a></th>
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
                                    <td><?php echo $row['gioitinh_sv']; ?></td>
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
                                          <p style="background:#ff4d4d; color: #fff; text-align: center; height: 35px;border-radius: 5px;line-height: 35px;font-size: 14px;">Không có sinh viên thỏa mãn điều kiện tìm</p>
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