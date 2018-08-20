<?php

	$sql = '';

	if(isset($_POST['search_sv'])){
		if($_POST['nam_hoc'] != "")
		{
			if ($_POST['nam_hoc'] == 1) {
				$sql .= ' AND nam_hoc_sv >= 2017 AND nam_hoc_sv <= 2018';
			}

			if ($_POST['nam_hoc'] == 1) {
				$sql .= ' AND nam_hoc_sv >= 2018 AND nam_hoc_sv <= 2019';
			}
		}
		if($_POST['khoa_hoc'] != "")
		{
			$sql .= ' AND course_sv = "'.$_POST['khoa_hoc'].'"';
		}

		if($_POST['trang_thai'] != "")
		{
			$sql .= ' AND type_sv = "'.$_POST['trang_thai'].'"';
		}

		if($_POST['ma_sv'] != "")
		{
			$sql .= ' AND id_sv = "'.$_POST['ma_sv'].'"';

		}

		if($_POST['name_sv'] != "")
		{
			$name_sv  = str_replace(' ', '%',trim($_POST['name_sv']));
			$sql .= ' AND hoten_sv LIKE  "%'.$name_sv.'%" ';
		}

		if($_POST['email_sv'] != "")
		{
			$email_sv  = $_POST['email_sv'];
			$sql .= ' AND email_sv = "'.$email_sv.'" ';
		}
					 	 
 
		$sql_sl_sv = "SELECT * FROM student WHERE 1 ".$sql;
		$results = mysqli_query($conn, $sql_sl_sv);

		$count = "SELECT COUNT(1) FROM student WHERE 1 ".$sql;
		$num_count = mysqli_query($conn, $count);
		$row = mysqli_fetch_assoc($num_count);
		$sl = $row['COUNT(1)'];


		// echo $sql_sl_sv;
	}
?>