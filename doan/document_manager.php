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
                <small>Tài liệu</small>
            </h1>
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i>Trang chủ</a></li>
                <li class="active">Tài liệu</li>
            </ul>
        </section>
        <section class="content">


            <div class="box box-solid">
                <div class="box-header with-border">
            <span class="fa-stack fa-lg pull-left edusecArLangCss">
                <i class="fa fa-user fa-2x"></i>
            </span>

                    <strong>DoanBH</strong> <br/>
                    <span class="text-muted">
                <strong>Địa chỉ email</strong> : doanbh32@wru.vn |
                <strong>Số điện thoại</strong> : 987456987456        </span>
                </div>
                <div class="box-body table-responsive">
                    <a class="btn btn-success pull-right edusecRtlPullLeft" href="/document/file-uploads/create"
                       data-target="#globalModal" data-toggle="modal"><i class="fa fa-plus-square"></i> Tải lên File</a>
                    <ul id="w1" class="nav nav-tabs">
                        <li><a href="#upload-me" data-toggle="tab"><i class="fa fa-upload" aria-hidden="true"></i>
                            Danh sách File đã tải lên</a></li>
                    </ul>
                    <div class="tab-content">
                    </div>
                    <div id="upload-me" class="tab-pane">

                        <form id="tab-upload-file-form" action="/document/file-uploads/downloadzip" method="post">
                            <input type="hidden" name="_csrf"
                                   value="UEFEanU4UncjcQUtPXRlIQomNS4QcRkUJHMoDgBLNz0dFyMEIH0YFA==">
                            <div class="box box-solid" style="border-top: none">
                                <div class="box-body">
                                    <div id="upload-file-grid" class="grid-view">
                                        <div class="summary">Hiển thị <b>1-1</b> của <b>1</b> trang.</div>
                                        <table class="table table-striped table-bordered fixHeader">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tiêu đề</th>
                                                <th>Loại file</th>
                                                <th>Khóa học</th>
                                                <th class="action-column"></th>
                                                <th class="action-column"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr data-key="3">
                                                <td>1</td>
                                                <td>Lập trình PHP buổi 1</td>
                                                <td>Bài giảng</td>
                                                <td>Lập trình PHP</td>
                                                <td><a href="/document/file-uploads/download?id=3&amp;tab=upload-me"
                                                       title="Download" data-pjax="0"><span
                                                        class="fa fa-download"></span></a></td>
                                                <td><a href="/document/file-uploads/view?id=3" title="Delete"
                                                       data-target="#globalModal" data-toggle="modal"
                                                       data-pjax="0"><span
                                                        class="fas fa-trash-alt"></span></a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--./ box-body -->
                            </div><!--./box-->

                        </form>

                    </div>
                </div>
            </div>
    </div>

    </section>
</div>
<div class="modal in" id="globalModal" tabindex="-1" role="dialog" aria-labelledby="esModalLabel" aria-hidden="true"
     style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <script type="text/javascript">$(document).ready(function () {
                $.fn.showStuData = function () {
                    $('.stu-data').show();
                    $('.emp-data').hide();
                }
                $.fn.showEmpData = function () {
                    $('.emp-data').show();
                    $('.stu-data').hide();
                }
                $.fn.setStuValueNull = function () {
                    $('#fileuploads-fu_stu_academic_year, #fileuploads-fu_stu_course, #fileuploads-fu_stu_section').val('');
                }
                if ($('#fileuploads-fu_share_with').val() == 1) {
                    $('.stu-data, .emp-data').hide();
                    $.fn.setStuValueNull();
                    $('#fileuploads-fu_emp_dept').val('');
                }
                if ($('#fileuploads-fu_share_with').val() == 1) {
                    $('.stu-data, .emp-data').hide();
                    $.fn.setStuValueNull();
                    $('#fileuploads-fu_emp_dept').val('');
                }
                else if (($('#fileuploads-fu_share_with').val() == 2) || ($('#fileuploads-fu_share_with').val() == 4)) {
                    $.fn.showStuData();
                    $('#fileuploads-fu_emp_dept').val('');
                }
                else if ($('#fileuploads-fu_share_with').val() == 3) {
                    $.fn.showEmpData();
                    $.fn.setStuValueNull();
                }
            });
            $('#fileuploads-fu_share_with').change(
                function () {
                    if ($('#fileuploads-fu_share_with').val() == 1) {
                        $('.stu-data, .emp-data').hide();
                        $.fn.setStuValueNull();
                        $('#fileuploads-fu_emp_dept').val('');
                    }
                    else if (($('#fileuploads-fu_share_with').val() == 2) || ($('#fileuploads-fu_share_with').val() == 4)) {
                        $.fn.showStuData();
                        $('#fileuploads-fu_emp_dept').val('');
                    }
                    else if ($('#fileuploads-fu_share_with').val() == 3) {
                        $.fn.showEmpData();
                        $.fn.setStuValueNull();
                    }
                });
            </script>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span><span class="sr-only"></span>
                </button>
                <h3 class="modal-title"><i class="fa fa-plus-square"></i> Tải lên File </h3>
            </div> <!-- /.modal-header -->


            <form id="file-upload-form" action="/document/file-uploads/create" method="post"
                  enctype="multipart/form-data">
                <input type="hidden" name="_csrf" value="X2luSnF1T00sWS8NOTl4GwUOHw4UPAQuK1sCLgQGKgcSPwkkJDAFLg==">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group field-fileuploads-fu_title required">
                                <label class="control-label" for="fileuploads-fu_title">Tiêu đề</label>
                                <input type="text" id="fileuploads-fu_title" class="form-control"
                                       name="FileUploads[fu_title]" maxlength="255" placeholder="Nhập tiêu đề cho file"
                                       aria-required="true">

                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group field-fileuploads-fu_category_id required">
                                <label class="control-label" for="fileuploads-fu_category_id">Loại file</label>
                                <select id="fileuploads-fu_category_id" class="form-control"
                                        name="FileUploads[fu_category_id]" aria-required="true">
                                    <option value="">--- Chọn loại file upload ---</option>
                                    <option value="1">Bài giảng</option>
                                    <option value="2">Tài liệu</option>
                                </select>

                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group field-fileuploads-file">
                                <label class="control-label" for="fileuploads-file">Tài liệu</label>
                                <input type="hidden" name="FileUploads[file]" value=""><input type="file"
                                                                                              id="fileuploads-file"
                                                                                              name="FileUploads[file]"
                                                                                              title="Browse File">
                                <div class="hint-block">Lưu ý: File nhỏ hơn 2mb
                                </div>
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>
                </div><!--/.model-body-->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tải lên</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
                </div><!--/.model-footer-->
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
</div>
</body>
</html>