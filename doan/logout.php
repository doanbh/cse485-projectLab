<?php
/**
 * Created by PhpStorm.
 * User: hungha
 * Date: 8/18/18
 * Time: 14:43
 */

session_start();
if (isset($_SESSION['email'])){
    unset($_SESSION['email']);//xoa login
}
    header('location: login.php');