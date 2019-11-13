<!doctype html>
<html>
<head>
  <meta charset="urf-8">
  <title>adminユーザー作成画面</title>
</head>
<body>
  <?= form_open('admin/Admin_user/register') ?>
      <br>
      名前<input type="text" name="name"><br>
      パスワード<input type="password" name="password"><br>
      メール<input type="email" name="email"><br>
      一言<input type="hobby" name="word"><br>

      <input type="submit" value="送信">

  <?= form_close() ?>

</body>
</html>
