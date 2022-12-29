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
