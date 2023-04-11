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

echo "<script>
       function delall() {
         console.log('delall');
         if (confirm('\\n題目說要確認，所以確認一下。\\n\\n(´ー`) (´_ゝ`) (´σ-`)\\n')) {
            form1.submit();
         }
         return false;
       }
      </script>";

//

// echo "
//     <style>
//       table,td{
//         border-collapse:collapse;
//       }
//     </style>
// ";


$sql = "SELECT * FROM `members`";
$result = mysqli_query($conn, $sql);

//總共有幾筆資料
$record = mysqli_num_rows($result);
//每頁顯示幾筆資料
$per_page = 10;
$total_page = ceil($record / $per_page); //天花板函式, 餘數結果會+1

if (isset($_GET['page'])) {
    $page = intVal($_GET['page']);
    //強制將收到的結果轉為值
} else {
    $page = 1;
}

$start = ($page - 1) * $per_page;
//$start = ($page * $per_page) - $per_page;
// $sql = "SELECT * FROM `members` LIMIT " . $start . "," . $per_page;
$sql = "SELECT * FROM `members` LIMIT {$start},{$per_page}";
$result = mysqli_query($conn, $sql);

// copy
echo "<form align=center action='deletemany' name='form1' method='post'>";
//

echo "<h1 align='center'>大宇宙事業處會員資料管理系統</h1>";
echo "<p align='center'>總共有 {$record} 筆資料，" . "目前在第 {$page} 頁</p>";
echo "<p align='center'>
      <a href='create'>新增會員資料</a>&emsp;
      <a href=\"#\" onclick='delall();'>刪除選取資料</a>
      </p>";

//資料內容呈現
echo "<p><table cellpadding=7 align=center border=1>";
//資料表頭
echo "<tr>
      <th >編號</th>
      <th>姓名</th>
      <th>帳號</th>
      <th>性別</th>
      <th>生日</th>
      <th>電子郵件</th>
      <th>網址</th>
      <th>家用電話</th>
      <th>行動電話</th>
      <th>地址</th>
      <th colspan='2'>功能</th>
      <th></th>
</tr>";
      // <th>等級</th>
      // <th>登入次數</th>
      // <th>最後登入</th>
      // <th>加入時間</th>


//資料內容
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr align=center>";
    echo "<td>" . $row['m_id'] . "</td>";
    echo "<td>" . $row['m_name'] . "</td>";
    echo "<td align='left'>" . $row['m_username'] . "</td>";
    echo "<td>" . $row['m_sex'] . "</td>";
    echo "<td>" . $row['m_birthday'] . "</td>";
    // echo "<td>" . $row['m_level'] . "</td>";
    echo "<td align='left'>" . $row['m_email'] . "</td>";
    echo "<td><a href='" . $row['m_url'] . "'>#</a></td>";
    echo "<td align='left'>" . $row['m_phone'] . "</td>";
    echo "<td align='left'>" . $row['m_phone'] . "</td>";
    echo "<td align='left'>" . $row['m_address'] . "</td>";
    // echo "<td>" . $row['m_login'] . "</td>";
    // echo "<td>" . $row['m_logintime'] . "</td>";
    // echo "<td>" . $row['m_jointime'] . "</td>";
    echo "<td><a href='update?m_id={$row["m_id"]}'>修改</a></td>";
    echo "<td><a href='delete?m_id={$row["m_id"]}'>刪除</a></td>";
    echo "<td><input type=\"checkbox\" name=\"del[]\" value=\"{$row['m_id']}\"></td>";
    echo "</tr>";
}

echo "</table></p>";
// copy
echo "</form>";
//

echo "<table align='center'";
echo "<tr>";
echo "<td>";

$prev = $page - 1;
$next = $page + 1;

echo "<a href='?page=1'>首頁</a>&emsp;";

if ($page > 1) {
    echo "<a href='?page=$prev'>上一頁</a>&emsp;";
} else { echo "　　　"; };

// ;

if ($page < $total_page) {
    echo "<a href='?page=$next'>下一頁</a>&emsp;";
} else { echo "　　　"; };

echo "<a href='?page=$total_page'>末頁</a>";

echo "</td>";
echo "</tr>";
echo "</table>";

mysqli_free_result($result);
mysqli_close($conn);

