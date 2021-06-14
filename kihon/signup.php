<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規登録画面</title>
</head>
<body>
  <h1>新規登録</h1>
  <form action="register.php" method="post">
  <div>
    <label for="name">名前：</label>
    <input type="text" name="name" requierd>
  </div>
  <div>
    <label for="email">メールアドレス：</label>
    <input type="email" name="mail" required>
  </div>
  <div>
    <label for="password">パスワード：</label>
    <input type="password" name="password" required>
  </div>
  <input type="submit" value="新規登録">
  </form>
</body>
</html>