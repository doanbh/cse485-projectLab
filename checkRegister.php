<?php
/**
 * Created by PhpStorm.
 * User: hungha
 * Date: 8/17/18
 * Time: 20:00
 */
if(isset($_POST['txtName']) && isset($_POST['txtNumPhone']) && isset($_POST['txtEmail']) && isset($_POST['txtPassword']))
{
    $name = $_POST['txtName'];
    $phone = $_POST['txtNumPhone'];
    $email=$_POST['txtEmail'];
    $pass=$_POST['txtPassword'];
    $newPass=md5($pass,PASSWORD_DEFAULT);


    if($email && $pass && $phone && $name){
        include "database.php";
        //2.Truy van Database
        $sql="SELECT * FROM teacher WHERE username='$name'&& email='$email'";
        $result=$conn->query($sql);
        //3. Xu ly ket qua
        if($result->num_rows > 0){
            echo 'Email đã tồn tại. Bạn vui lòng chọn địa chỉ email khác';
        }else{
            $sqlAdd="INSERT INTO teacher(id,username,email,numphone,password) value(0,'$name','$email','$phone','$newPass')";
            $result2=$conn->query($sqlAdd);
            printf("Affected rows (INSERT): %d\n", $conn->affected_rows);
        }

        //4. Dong ket noi
        $result->close();
        $conn->close();
    }else{
        echo 'Bạn chưa nhập đầy đủ thông tin';
    }
}else{
    echo 'Username or Password ko xac dinh';
}