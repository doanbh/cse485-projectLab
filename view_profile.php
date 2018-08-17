<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery.js"></script><script src="js/bootstrap.min.js"></script>
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
                <i class="fa fa-eye" aria-hidden="true"></i> Thông tin cá nhân |
                <small>DoanBH</small>
            </h1>
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i>Trang chủ</a></li>
                <li class="active">Thông tin tài khoản</li>
                <li class="active">DoanBH</li>
            </ul>
        </section>
        <section class="content">


            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img class="center-block img-circle img-thumbnail img-responsive"
                                 src="images/user.png" alt="No Image" style="width:100px;height:100px"> <a
                                class="text-center center-block" href="#"
                                title="Change Profile Picture" data-target="#globalModal" data-toggle="modal"
                                data-modal-size="modal-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i> Thay
                            ảnh đại diện</a>                                <h4 class="profile-username text-center">
                            DoanBH </h4>
                            <h5 class="text-center"><span class="label label-success">Hoạt động</span></h5>
                            <hr>

                            <strong>
                                Mã giáo viên </strong>
                            <p class="text-muted">
                                23 </p>

                            <strong>
                                Email </strong>
                            <p class="text-muted">
                                doanbh32@wru.vn </p>

                            <strong>Số điện thoại </strong>
                            <p class="text-muted">
                                0989006188 </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div id="emp-profile">
                                <ul id="w1" class="nav-tabs margin-bottom nav">
                                    <li class="active"><a href="#">Thông
                                        tin cá nhân</a>
                                    </li>
                                    <li><a href="#">Khóa học</a></li>
                                    <li><a href="#">Bài giảng & Tài
                                        liệu</a></li>
                                </ul>

                                <p class="text-right">
                                    <a class="btn btn-primary btn-sm"
                                       oncontextmenu="return false;" data-target="#globalModal" data-toggle="modal"
                                       data-modal-size="modal-lg" data-backdrop="static" data-keyboard="false"><i class="fas fa-edit"
                                                                     aria-hidden="false"></i> Sửa</a></p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <colgroup>
                                            <col style="width:15%">
                                            <col style="width:35%">
                                            <col style="width:15%">
                                            <col style="width:35%">
                                        </colgroup>
                                        <tr>
                                            <th>Tên</th>
                                            <td>Bùi Hữu Đoàn</td>
                                            <th>Tuổi</th>
                                            <td>23</td>
                                        </tr>
                                        <tr>
                                            <th>Ngày tham gia</th>
                                            <td>September 1, 2016</td>
                                            <th>Ngày sinh</th>
                                            <td>September 16, 1995</td>
                                        </tr>
                                        <tr>
                                            <th>Giới tính</th>
                                            <td>Nam</td>
                                            <th>Nơi sinh</th>
                                            <td>Thái Bình</td>
                                        </tr>
                                        <tr>
                                            <th>Các kĩ năng</th>
                                            <td>Lập trình Android, IOS</td>
                                            <th>Tổng số năm kinh nghiệm</th>
                                            <td>3</td>
                                        </tr>
                                    </table>
                                </div><!--/box-body-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="modal in" id="globalModal" tabindex="-1" role="dialog" aria-labelledby="esModalLabel" aria-hidden="true"
         style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <link href="/assets/f94f67c/themes/smoothness/jquery-ui.min.css?v=1490182548" rel="stylesheet">
                <form id="emp-master-update" action="/employee/emp-master/update?id=23&amp;tab=personal" method="post">
                    <input type="hidden" name="_csrf" value="Y2taLjh2NXIQWxtpcDoCJDkMK2pdP34RF1k2Sk0FUDguPT1AbTN/EQ==">
                    <div class="modal-header">
                        <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span
                                aria-hidden="true">×</span></button>
                        <h4 class="modal-title">
                            <i class="fa fa-info-circle"></i> Thông tin chi tiết </h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label" for="user-user_last_name">Họ tên</label>
                                    <input type="text" id="user-user_last_name" class="form-control"
                                           name="User[user_last_name]" value="Bùi Hữu Đoàn" maxlength="35">

                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label" for="user-user_gender">Giới tính</label>
                                    <select id="user-user_gender" class="form-control" name="User[user_gender]">
                                        <option value="">--- Chọn giới tính ---</option>
                                        <option value="1" selected="">Nam</option>
                                        <option value="2">Nữ</option>
                                    </select>

                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label" for="user-user_dob">Ngày sinh</label>
                                    <input type="date" id="user-user_dob" class="form-control hasDatepicker"
                                           name="User[user_dob]" size="10">


                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label" for="empinfo-emp_birthplace">Địa chỉ</label>
                                    <input type="text" id="empinfo-emp_birthplace" class="form-control"
                                           maxlength="50">

                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group ">
                                    <label class="control-label" for="empinfo-emp_joining_date">Ngày tham gia</label>
                                    <input type="date" id="empinfo-emp_joining_date" class="form-control hasDatepicker"
                                           size="18">


                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div>
                                    <label>
                                        Số năm kinh nghiệm </label>
                                </div>
                                <div class="col-sm-6 col-xs-12 no-padding">
                                    <div class="form-group">

                                        <select id="empinfo-emp_experience_year" class="form-control"
                                                name="EmpInfo[emp_experience_year]">
                                            <option value="">Chọn năm</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                            <option value="41">41</option>
                                            <option value="42">42</option>
                                            <option value="43">43</option>
                                            <option value="44">44</option>
                                            <option value="45">45</option>
                                            <option value="46">46</option>
                                            <option value="47">47</option>
                                            <option value="48">48</option>
                                            <option value="49">49</option>
                                            <option value="50">50</option>
                                            <option value="51">51</option>
                                            <option value="52">52</option>
                                            <option value="53">53</option>
                                            <option value="54">54</option>
                                            <option value="55">55</option>
                                            <option value="56">56</option>
                                            <option value="57">57</option>
                                            <option value="58">58</option>
                                            <option value="59">59</option>
                                            <option value="60">60</option>
                                        </select>

                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 no-padding">
                                    <div class="form-group">

                                        <select id="empinfo-emp_experience_month" class="form-control"
                                                name="EmpInfo[emp_experience_month]">
                                            <option value="">Chọn tháng</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                        </select>

                                        <div class="help-block"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-info">Cập nhật</button>
                        <button data-dismiss="modal" class="btn btn-default pull-right" type="button">Đóng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?> 
</div>
</body>
</html>