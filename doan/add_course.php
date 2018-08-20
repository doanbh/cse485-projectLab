<?php
/**
 * Created by PhpStorm.
 * User: hungha
 * Date: 8/18/18
 * Time: 15:37
 */
include "database.php";
if (isset($_GET['delete'])) {
    $sql_dele = 'DELETE FROM `course` WHERE id_course = "' . $_GET['delete'] . '"';
    if (mysqli_query($conn, $sql_dele)) {
//        echo 'DELETE FROM `course` WHERE id_course = "'.$_GET['delete'].'"';
        header('location: manager_course.php');
    } else {
        echo 'err';
    }
    exit();
}
if (isset($_POST['txtNameCourse']) && isset($_POST['txtStartDateCourse']) && isset($_POST['txtEndDateCourse']) && isset($_POST['optStatusCourse'])) {
    $name_course = $_POST['txtNameCourse'];
    $start_date_course = $_POST['txtStartDateCourse'];
    $end_date_course = $_POST['txtEndDateCourse'];
    $status_course = $_POST['optStatusCourse'];


    if ($name_course && $start_date_course && $end_date_course && $status_course) {
        //2.Truy van Database
        $sql = "SELECT * FROM course WHERE name_course='$name_course' && start_date='$start_date_course' && end_date='$end_date_course' ";
        $result = $conn->query($sql);
        //3. Xu ly ket qua
        if ($result->num_rows > 0) {
            echo 'Khóa học đã tồn tại. Bạn vui lòng nhập khóa học khác';
        } else {
//            echo("INSERT INTO course(name_course,start_date,end_date,status_course) VALUES('$name_course',$start_date_course,$end_date_course,$status_course)");
            $sqlAdd = "INSERT INTO course(name_course,start_date,end_date,status_course) VALUES('$name_course','$start_date_course','$end_date_course',$status_course)";
            $result2 = $conn->query($sqlAdd);
            header('location: manager_course.php');
        }

        //4. Dong ket noi
        $result->close();
        $conn->close();
    } else {
        echo 'Bạn chưa nhập đầy đủ thông tin';
    }
}