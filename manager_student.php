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

            <div class="box box-solid">
                <div class="et">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> Tìm kiếm sinh viên</h3>
                        <div class="box-tools">
                            <a class="btn btn-success btn-sm" href="add_student.php"><i
                                    class="fa fa-plus-square"></i> Thêm sinh viên</a></div>
                    </div>
                </div>

                <form id="w0" action="/student/stu-master/index" method="get">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group ">
                                    <label class="control-label"
                                           for="">Năm học</label>
                                    <select id="" class="form-control"
                                            name="">
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
                                            name="">
                                        <option value="">--- Chọn khóa học ---</option>
                                        <option value="1" selected>Lập trình PHP</option>
                                    </select>

                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group ">
                                    <label class="control-label" for="">Trạng thái</label>
                                    <select id="" class="form-control"
                                            name="">
                                    <option value="">--- Chọn trạng thái ---</option>
                                    <option value="1" selected>Hoạt động</option>
                                    <option value="1" selected>Không hoạt động</option>
                                    </select>

                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4" style="margin-top: 25px;">
                                <div class="form-group field-stuecdetailsearch-searchgrid">

                                    <input type="text" id="" class="form-control"
                                           name="" placeHolder="Nhập mã sinh viên">

                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin-top: 25px;">
                                <div class="form-group">

                                    <input type="text" id="" class="form-control"
                                           name=""
                                           placeHolder="Nhập tên sinh viên hoặc email">

                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- ./box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info">Tìm kiếm</button>
                        <a class="btn btn-default" href="/student/stu-master/index">Làm lại</a></div>
                </form>
            </div>
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fas fa-users"></i> Danh sách sinh viên</h3>
                </div>
                <div class="box-body table-responsive">
                    <div id="p0" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="10000">
                        <div id="w1" class="grid-view">
                            <div class="summary">Hiển thị <b>1-4</b> của <b>4</b> trang.</div>
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
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
                                <tr data-key="4">
                                    <td>1</td>
                                    <td>CF</td>
                                    <td>Bùi Hữu Đoàn</td>
                                    <td>23</td>
                                    <td>doanbh@gmail.com</td>
                                </tr>
                                <tr data-key="4">
                                    <td>1</td>
                                    <td>CF</td>
                                    <td>Bùi Hữu Đoàn</td>
                                    <td>23</td>
                                    <td>doanbh@gmail.com</td>
                                </tr><tr data-key="4">
                                    <td>1</td>
                                    <td>CF</td>
                                    <td>Bùi Hữu Đoàn</td>
                                    <td>23</td>
                                    <td>doanbh@gmail.com</td>
                                </tr><tr data-key="4">
                                    <td>1</td>
                                    <td>CF</td>
                                    <td>Bùi Hữu Đoàn</td>
                                    <td>23</td>
                                    <td>doanbh@gmail.com</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- /.box-body -->
        </section>
    </div>
    <?php include "footer.php"; ?> 
</div>
</body>
</html>