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

if (isset($_POST["action"]) && $_POST["action"] == "delete") {

    $sql = "DELETE FROM `members` WHERE `m_id`={$_POST['m_id']}";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    header('Location: http://members.com:6080');
    exit();

}

// $id = $_GET["m_id"];
// echo $id;
// exit();

$sql_db = "SELECT * FROM `members` WHERE `m_id` = " . $_GET["m_id"];
$result = mysqli_query($conn, $sql_db);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);

$id = $_GET["m_id"];

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員資料管理系統</title>
</head>

<body>
  <h1 align='center'>會員資料管理系統 - 刪除資料</h1>
  <p align='center'><a href='..'>返回主畫面</a></p>
  <form method="POST" action="delete" name="formDel">
    <table border="1" align="center" cellpadding='4'>
      <tr>
        <th>欄位</th>
        <th>資料</th>
      </tr>
      <tr>
        <td>姓名</td>
        <td><input type="text" name="m_name" required value="<?php echo $row["m_name"] ?>"></td>
      </tr>
      <tr>
        <td>使用者名稱</td>
        <td><input type="text" name="m_username" required value="<?php echo $row["m_username"] ?>"></td>
      </tr>
      <tr>
        <td>密碼</td>
        <td><input type="text" name="m_passwd" required value="<?php echo $row["m_passwd"] ?>"></td>
      </tr>
      <tr>
        <td>性別</td>
        <td>
          <input type="radio" name="m_sex" value='男' <?php if ($row["m_sex"] == "男") {echo "checked";}?>>男
          <input type="radio" name="m_sex" value='女' <?php if ($row["m_sex"] == "女") {echo "checked";}?>>女
          <input type="radio" name="m_sex" value='其他' <?php if ($row["m_sex"] == "其他") {echo "checked";}?>>其他
        </td>
      </tr>
      <tr>
        <td>生日</td>
        <td><input type="date" name="m_birthday" required value="<?php echo $row["m_birthday"] ?>"></td>
      </tr>
      <tr>
        <td>身分</td>
        <td>
          <input type="radio" name="m_level" value='admin' <?php if ($row["m_level"] == "admin") {echo "checked";}?>>管理員
          <input type="radio" name="m_level" value='member' <?php if ($row["m_level"] == "member") {echo "checked";}?>>一般會員
        </td>
      </tr>
      <tr>
        <td>電子郵件</td>
        <td><input type="email" name="m_email" value="<?php echo $row["m_email"] ?>"></td>
      </tr>
      <tr>
        <td>網址</td>
        <td><input type="url" name="m_url" value="<?php echo $row["m_url"] ?>"></td>
      </tr>
      <tr>
        <td>電話</td>
        <td><input type="tel" name="m_phone" value="<?php echo $row["m_phone"] ?>"></td>
      </tr>
      <tr>
        <td>住址</td>
        <td><input type="text" name="m_address" size="40" value="<?php echo $row["m_address"] ?>"></td>
      </tr>
      <tr>
        <td colspan='2' align='center'>
          <?php
           $id = $_GET["m_id"];
          ?>
          <input type="hidden" name="m_id" value="<?= $_GET["m_id"]; ?>">
          <input type="hidden" name="action" value="delete">
          <input type="submit" name="button1" value="刪除這筆資料">&emsp;
          <input type="button" onclick="location.href='..'" name="button_return" value="取消">
        </td>
      </tr>
    </table>
  </form>
</body>

</html>



