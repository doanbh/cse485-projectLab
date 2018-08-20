<?php
session_start();

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

if(isset($_POST['txtEmail']) && isset($_POST['txtPassword']))
{
    $email=$_POST['txtEmail'];
    $pass=$_POST['txtPassword'];
    $newPass=md5($pass);


    if($email && $pass){
        include "database.php";
        //2.Truy van Database
        $sql="SELECT * FROM teacher WHERE email='$email' && password='$newPass'";
        $result=$conn->query($sql);
        //3. Xu ly ket qua
        if($result->num_rows > 0){
            //Lưu tên đăng nhập
            $_SESSION['email'] = $email;
            echo 'Đăng nhập thành công';
            header('location: index.php');
            exit();
        }else{
            header('location: login.php?f=1');
            echo 'Tên đăng nhập hoặc mật khẩu không chính xác';
            exit();
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
