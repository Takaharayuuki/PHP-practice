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

  $statement = $db->prepare('UPDATE memos SET memo=? WHERE id=?');
  $statement->execute(array($_POST['memo'], $_POST['id']));
  ?>
  <p>メモの内容を変更しました</p>
  <a href="index.php">戻る</a>
</body>

</html>