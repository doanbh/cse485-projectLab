<?php

if (isset($_POST['update_info'])) {
	$hoten = $_POST['name'];
	$sex = $_POST['sex'];
	$diachi = $_POST['diachi'];
	$ngay = $_POST['ngay'];
	$nam_kn = $_POST['kn'];
	$tuoi = $_POST['tuoi'];
	$skill = $_POST['ky_nang'];

	$sql_update = "UPDATE teacher SET username='".$hoten."',sex='".$sex."',address='".$diachi."',ngay_tham_gia='".$ngay."',kinh_nghiem='".$nam_kn."',tuoi='".$tuoi."',ky_nang='".$skill."' WHERE email = '".$_SESSION['email']."' LIMIT 1";
	mysqli_query($conn, $sql_update);
}

?>