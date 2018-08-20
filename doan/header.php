<?php 
session_start();
	if (!isset($_SESSION['email'])) {
		header('location: login.php');
	}
?>
<header>
	<div class="header_qlkh">
	  <div class="container">
			<div class="logo">
		         <a class="logo-qlkh" href="index.php" title="Đại học Thủy Lợi"><span>ĐHTL</span></a>
		     </div>
			<ul>
				<li class="">
					<a>Quản lý khóa học</a>	
					<div class="box_dn">  
					  <a href="manager_course.php" >Danh sách khóa học</a>
					  <a href="manager_notification.php" >Quản lí thông báo</a>
					  <a href="list_student.php">Danh sách sinh viên</a>
					</div>
				</li>
				<li>
					<a href="">Sinh viên</a>
					<div class="box_dn">  
					  <a href="add_student.php" >Thêm sinh viên</a>
					  <a href="manager_student.php" >Quản lí sinh viên</a>
					</div>
				</li>
				<li>
					<a href="document_manager.php">Tài liệu và bài giảng</a>
					<div class="box_dn">
					</div>
				</li>
			</ul>

			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    <span class="cate"><img src="images/list.png"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
			    <li><a href="view_profile.php"><img src="images/ic_user.png"><p>Thông tin cá nhân</p></a></li>
			    <li><a href="#"><img src="images/tai_lieu.png"><p>Quản lý tài nguyên</p></a></li>
			    <li><a href="logout.php"><img src="images/logout.png"><p>Đăng xuất</p></a></li>
			  </ul>
			</div>

			<div class="user_login">
				<img src="images/user.png">
				<span>Đoàn BH</span>
			</div>
		</div>
	</div>     
</header>