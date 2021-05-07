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
  } catch (PDOException $e) {
    echo 'DB接続エラー : ' . $e->getMessage();
  }

  $memos = $db->query('SELECT * FROM memos ORDER BY id DESC');
  ?>

  <article>
    <?php while ($memo = $memos->fetch()) : ?>
      <p><a href="./memo.php"><?php print(mb_substr($memo['memo'], 0, 50)); ?></a></p>
      <p><?php print($memo['created_at']); ?></p>
      <hr>
    <?php endwhile; ?>
  </article>
</body>

</html>