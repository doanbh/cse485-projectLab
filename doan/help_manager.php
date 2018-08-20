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
                <small>Trợ giúp</small>
            </h1>
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i>Trang chủ</a></li>
                <li class="active">Trợ giúp</li>
            </ul>
        </section>
        <section class="content">

            <div id="ticket-list" data-pjax-container="" data-pjax-push-state data-pjax-timeout="10000">
                <div class="box box-solid">
                    <div class="box-header with-border">
            <span class="fa-stack fa-lg pull-left edusecArLangCss">
    			<i class="fa fa-user fa-2x"></i>
    		</span>
                        <strong>Đoàn BH</strong> <br/>
                        <span class="text-muted">
                <strong>Mã giáo viên</strong> : 23 |
    			<strong>Email</strong> : doanbh32@wru.vn |
    			<strong>Số điện thoại</strong> : 987456987456   	</span>
                    </div>
                    <div class="box-body table-responsive">
                        <a class="btn btn-success pull-right edusecRtlPullLeft"
                           href="/communication/helpdesk/helpdesk-tickets/create" data-pjax="0"
                           data-target="#globalModal" data-toggle="modal"><i class="fa fa-plus-square"></i> Tạo 1 câu
                            hỏi mới</a>
                        <ul id="w2" class="nav nav-tabs">
                            <li class="active"><a href="/communication/helpdesk/helpdesk-tickets/index?ttype=2">Danh
                                    sách câu hỏi</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="w2-tab0" class="tab-pane"></div>
                            <div id="w2-tab1" class="tab-pane active">
                                <div id="w1" class="grid-view">
                                    <div class="summary">Hiển thị <b>1-2</b> of <b>2</b> items.</div>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><a class="desc"
                                                   href="" sort=hdt_id"
                                                   data-sort="hdt_id">ID</a></th>
                                            <th>
                                                <a href="" sort=hdt_initiat_user_id"
                                                   data-sort="hdt_initiat_user_id">Được hỏi bởi</a></th>
                                            <th>
                                                <a href="" sort=hdt_subject_id"
                                                   data-sort="hdt_subject_id">Khóa học</a></th>
                                            <th>
                                                <a href="" sort=created_at"
                                                   data-sort="created_at">Ngày tạo</a></th>
                                            <th>
                                                <a href="" sort=updated_at"
                                                   data-sort="updated_at">Ngày cập nhật</a></th>
                                            <th>
                                                <a href="" sort=hdt_ticket_status"
                                                   data-sort="hdt_ticket_status">Trạng thái</a></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr data-key="1">
                                            <td>1</td>
                                            <td class="text-center" style="width:10px"><a class="viewTicket"
                                                                                          href="/communication/helpdesk/helpdesk-tickets/view?id=2"
                                                                                          data-pjax="0">2</a></td>
                                            <td>Doanbui</td>
                                            <td>Lập trình Anroid</td>
                                            <td class="text-center">September 21, 2018</td>
                                            <td class="text-center">Sep 22, 2018, 4:42:22 AM</td>
                                            <td class="text-center"><span class='label label-danger'> CLOSE </span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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


                <style>
                    .replyTextArea {
                        background-color: #fff;
                        border: 1px solid #ccc;
                        border-radius: 4px !important;
                        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
                        color: #555;
                        display: block;
                        font-size: 14px;
                        line-height: 1.42857;
                        padding: 6px 12px;
                        transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
                        max-height: 80px
                    }
                </style>
                <script type="text/javascript">var s2options_d6851687 = {
                        "themeCss": ".select2-container--krajee",
                        "sizeCss": "",
                        "doReset": true,
                        "doToggle": false,
                        "doOrder": false
                    };
                    var select2_f24aaa71 = {
                        "allowClear": true,
                        "theme": "krajee",
                        "width": "100%",
                        "placeholder": "Select Subject...",
                        "language": "en-US"
                    };
                </script>
                <form id="add-ticket" class="hide-on-submit" action="/communication/helpdesk/helpdesk-tickets/create"
                      method="post">
                    <div class="box box-solid">
                        <div class="modal-header">
                            <h3 class="modal-title"><i class="fa fa-plus-square"></i> Tạo 1 câu hỏi mới
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                </button>
                            </h3>
                        </div> <!-- /.modal-header -->

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group field-helpdesktickets-hdt_subject_id required">
                                        <label class="control-label" for="helpdesktickets-hdt_subject_id">Khóa
                                            học</label>
                                        <select id="helpdesktickets-hdt_subject_id"
                                                class="form-control select2-hidden-accessible"
                                                name="HelpdeskTickets[hdt_subject_id]" aria-required="true"
                                                data-s2-options="s2options_d6851687"
                                                data-krajee-select2="select2_f24aaa71" style="display:block"
                                                tabindex="-1" aria-hidden="true">
                                            <option value="">Select Subject...</option>
                                            <option value="1">Lập trình Android</option>
                                        </select>
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group field-helpdesktickets-hdt_comment required">
                                        <label class="control-label" for="helpdesktickets-hdt_comment">Câu hỏi</label>
                                        <textarea id="helpdesktickets-hdt_comment" class="form-control replyTextArea"
                                                  name="HelpdeskTickets[hdt_comment]" maxlength="200" rows="3"
                                                  placeholder="Đặt câu hỏi tại đây" aria-required="true"></textarea>
                                        <p class="counter text-aqua" id="my-counter">Tối đa 200 kí tự</p>

                                        <div class="help-block"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display:none" class="overlay">
                            <i class="fa fa-refresh fa-spin"></i>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-flat pull-left">Tạo</button>
                            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</div>
</body>
</html>