<?php
	include "database.php";
	$ten = $email = $sdt = $khoa_hoc = $birth = $gender = '';
	$loi_ten = $loi_gender = $loi_email = $loi_khoa_hoc = $loi_birth =$loi_sdt = '';

	if(isset($_POST['add_student'])){

		if($_POST['ho_va_ten'] == "")
		{
			$loi_ten = 'vui lòng nhập vào tên';

		}else{
			$ten = $_POST['ho_va_ten'];
			 }

		if($_POST['gender'] == "")
		{
			$loi_gender = 'vui lòng chọn giới tính';

		}else{
			$gender = $_POST['gender'];
			 }

		if($_POST['email'] == "")
		{
			$loi_email = 'vui lòng nhập vào email';

		}else{
			$email = $_POST['email'];
			 }

		if($_POST['sdt'] == "")
		{
			$loi_sdt = 'vui lòng nhập vào số điện thoại';

		}else{
			$sdt = $_POST['sdt'];
			 }

		if($_POST['khoa_hoc'] == "")
		{
			$loi_khoa_hoc = 'vui lòng chọn khóa học';

		}else{
			$khoa_hoc = $_POST['khoa_hoc'];
			 }

		if($_POST['birth'] == "")
		{
			$loi_birth = 'vui lòng nhập vào ngày sinh';

		}else{
			$birth = $_POST['birth'];
		}
					 	 
		if ($ten != '' && $gender != 0 && $email != '' && $sdt != 0 && $khoa_hoc != ''){	 	 
		$insert = "INSERT INTO `student`(`hoten_sv`, `gioitinh_sv`, `email_sv`, `sodt_sv`, `ngaysinh_sv`,`course_sv`,`nam_hoc_sv`) VALUES ('$ten','$gender','$email','$sdt','$birth','$khoa_hoc',NOW())";
		echo $insert;	

		if (mysqli_query($conn,$insert)){
		
			header('location: manager_student.php');
		}
}
}	

?>