<!doctype html>
<html>
<head>
  <meta charset = "utf-8">
  <title>ログインしてください</title>
</head>
<body>
  <?= form_open('admin/login/exec'); ?>
    メールアドレス<input type="text" name="email"><br>
    パスワード<input type="text" name="password"><br>
    <br>
    <input type="submit" value='ログイン'>
  <?= form_close();  ?>
</body>
</html>
