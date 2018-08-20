<?php
/**
 * Created by PhpStorm.
 * User: hungha
 * Date: 8/17/18
 * Time: 18:48
 */
$host="localhost";
$username = "root";
$password = "";
$db="db_final_exam";
//1.Ket noi Server
$conn = new mysqli($host, $username, $password,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
error_reporting(E_ERROR | E_PARSE);