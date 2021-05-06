<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  try {
    $db = new PDO('mysql:dbname=mydb;host=localhost:8889;charset=utf8', 'root', 'root');

    $db->exec('INSERT INTO memos SET memo="' . $_POST['memo'] . '", created_at=NOW()');
  } catch (PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage();
  }


  ?>
</body>

</html>