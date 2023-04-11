<?php

header("content-type:text/html; charset=utf-8");
date_default_timezone_set("Asia/Taipei");

$user = "root";
$password = "";
$host = "localhost";
$db = "member";
$port = "3306";

$conn = mysqli_connect($host, $user, $password, $db, $port);

if ($conn) {
    mysqli_select_db($conn, $db);
    mysqli_query($conn, 'set names utf8');
    mysqli_set_charset($conn, "utf8");
} else {
    echo "資料庫連線失敗！！";
}

?>
