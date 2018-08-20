<?php
session_start();
include "database.php";

if (isset($_GET['delete'])) {
	$sql_dele = 'DELETE FROM `notification` WHERE id_noti = "'.$_GET['delete'].'"';
	if (mysqli_query($conn, $sql_dele)) {
    header('location: manager_notification.php');
	}else{
		echo 'err';
	}
}


$sql_id = 'SELECT `id` FROM `teacher` WHERE email = "'.$_SESSION['email'].'"';

$result = mysqli_query($conn, $sql_id);

$row = mysqli_fetch_assoc($result);

if (isset($_POST['sub_tb'])) {
	$sql = "INSERT INTO `notification`(`name_noti`, `date_noti`, `id_gv`, `id_kh`) VALUES ('".$_POST['nd_tb']."',NOW(),'".$row['id']."','".$_POST['khoa_hoc']."')";

	if (mysqli_query($conn, $sql)) {
    	header('location: manager_notification.php?f=2');
	} else {
	    echo "có lỗi xảy ra";
	}
}

?>