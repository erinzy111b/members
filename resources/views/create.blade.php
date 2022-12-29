<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員資料管理系統</title>
</head>

<body>
  <h1 align='center'>會員資料管理系統 - 新增資料</h1>
  <p align='center'><a href='..'>返回主畫面</a></p>
  <form action="create_submit" method="POST" name="formAdd">
    <table border="1" align="center" cellpadding='4'>
      <tr>
        <th>欄位</th>
        <th>資料</th>
      </tr>
      <tr>
        <td>姓名</td>
        <td><input type="text" name="m_name" required></td>
      </tr>
      <tr>
        <td>使用者名稱</td>
        <td><input type="text" name="m_username" required></td>
      </tr>
      <tr>
        <td>密碼</td>
        <td><input type="text" name="m_passwd" required></td>
      </tr>
      <tr>
        <td>性別</td>
        <td>
          <input type="radio" name="m_sex" value='男' checked>男
          <input type="radio" name="m_sex" value='女'>女
          <input type="radio" name="m_sex" value='其他'>其他
        </td>
      </tr>
      <tr>
        <td>生日</td>
        <td><input type="date" name="m_birthday" required></td>
      </tr>
      <tr>
        <td>身分</td>
        <td>
          <input type="radio" name="m_level" value='admin'>管理員
          <input type="radio" name="m_level" value='member' checked>一般會員
        </td>
      </tr>
      <tr>
        <td>電子郵件</td>
        <td><input type="email" name="m_email"></td>
      </tr>
      <tr>
        <td>網址</td>
        <td><input type="url" name="m_url"></td>
      </tr>
      <tr>
        <td>電話</td>
        <td><input type="tel" name="m_phone"></td>
      </tr>
      <tr>
        <td>住址</td>
        <td><input type="text" name="m_address" size="40"></td>
      </tr>
      <tr>
        <td colspan='2' align='center'>
          <input type="hidden" name="action" value="create">
          <?php $now = date('Y/m/d H:i:s'); ?>
          <input type="hidden" name="m_jiontime" value="<?= $now ?>">
          <input type="submit" name="button1" value="確定新增">
          <input type="reset" name="button2" value="清空重填">
        </td>
      </tr>
    </table>
  </form>
</body>

</html>



{{--

if (isset($_POST["action"]) && $_POST["action"] == "create") {

  header("content-type:text/html; charset=utf-8");
date_default_timezone_set("Asia/Taipei");

$user = "root";
$password = "1qaz@wsx";
$host = "localhost";
$db = "exam";
$port = "3306";

$conn = mysqli_connect($host, $user, $password, $db, $port);

if ($conn) {
    //選擇資料庫
    mysqli_select_db($conn, $db);
    //設置資料庫編碼方式
    mysqli_query($conn, 'set names utf8');
    mysqli_set_charset($conn, "utf8");
} else {
    echo "資料庫連線失敗！！";
}

    $sql_query = "INSERT INTO `members`(`m_name`,`m_username`,`m_passwd`,`m_sex`,`m_birthday`,`m_level`,`m_email`,`m_phone`,`m_address`,`m_jiontime`) VALUES(";
    $sql_query .= "'" . $_POST["m_name"] . "',";
    $sql_query .= "'" . $_POST["m_username"] . "',";
    $sql_query .= "'" . $_POST["m_passwd"] . "',";
    $sql_query .= "'" . $_POST["m_sex"] . "',";
    $sql_query .= "'" . $_POST["m_birthday"] . "',";
    $sql_query .= "'" . $_POST["m_level"] . "',";
    $sql_query .= "'" . $_POST["m_email"] . "',";
    $sql_query .= "'" . $_POST["m_phone"] . "')";
    $sql_query .= "'" . $_POST["m_address"] . "')";
    $sql_query .= "'" . $_POST["m_jiontime"] . "')";
    // echo $sql_query;
    // exit;
    mysqli_query($conn, $sql_query);
    mysqli_close($conn); //關閉資料庫連接
    header("location: php_mysqli_read.php");
}
 --}}
