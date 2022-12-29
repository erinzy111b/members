<?php
header("content-type:text/html; charset=utf-8");
date_default_timezone_set("Asia/Taipei");

$user = "root";
$password = "1qaz@wsx";
$host = "localhost";
$db = "exam";
$port = "3306";

$conn = mysqli_connect($host, $user, $password, $db, $port);

if ($conn) {
    mysqli_select_db($conn, $db);
    mysqli_query($conn, 'set names utf8');
    mysqli_set_charset($conn, "utf8");
} else {
    echo "資料庫連線失敗！！";
}

$del = $_POST['del'];
// print_r($del);
foreach ($del as $value) {
    mysqli_query($conn, "DELETE FROM `members` WHERE `m_id`= " . $value);
}
mysqli_close($conn); //關閉資料庫連接
header('Location: http://members.com:6080');
    exit();
