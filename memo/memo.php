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
  require('dbConnect.php');

  $id = $_REQUEST['id'];
  if (!is_numeric($id) || $id <= 0) {
    print('1以上の数字で指定してください');
    exit;
  }

  $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
  $memos->execute(array($_REQUEST['id']));
  $memo = $memos->fetch();
  ?>

  <article>
    <pre><?php print($memo['memo']); ?> </pre>
    <a href="delete.php?id=<?php print($memo['id']); ?>">削除する</a>
    |
    <a href="update.php?id=<?php print($memo['id']); ?>">編集する</a>
    |
    <a href="./index.php">戻る</a>
  </article>

</body>

</html>