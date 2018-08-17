<?php
/**
 * Created by PhpStorm.
 * User: hungha
 * Date: 8/17/18
 * Time: 19:02
 */
//Khai báo sử dụng session
session_start();

if(isset($_POST['txtEmail']) && isset($_POST['txtPassword']))
{
    $email=$_POST['txtEmail'];
    $pass=$_POST['txtPassword'];
    $newPass=md5($pass,PASSWORD_DEFAULT);


    if($email && $pass){
        include "database.php";
        //2.Truy van Database
        $sql="SELECT * FROM teacher WHERE email='$email' && password='$newPass'";
        $result=$conn->query($sql);
        //3. Xu ly ket qua
        if($result->num_rows > 0){
            echo 'Đăng nhập thành công';
            header('index.php');
            exit();
        }else{
            echo 'Tên đăng nhập hoặc mật khẩu không chính xác';
        }

        //4. Dong ket noi
        $result->close();
        $conn->close();
    }else{
        echo 'Bạn chưa nhập username hoặc password';
    }
}else{
    echo 'Username or Password ko xac dinh';
}
