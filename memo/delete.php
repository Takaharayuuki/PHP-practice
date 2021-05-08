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
  if (isset($_REQUEST['id']) && is_numeric(($_REQUEST['id']))) {
    $id = $_REQUEST['id'];

    $statement = $db->prepare('DELETE FROM memos WHERE id=?');
    $statement->execute(array($id));
  }
  ?>
  <p>メモを削除しました</p>
  <a href="index.php">戻る</a>
</body>

</html>