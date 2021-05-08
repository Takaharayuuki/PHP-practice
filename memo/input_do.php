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

  $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
  $statement->execute(array($_POST['memo']));
  echo '登録完了';

  ?>
</body>

</html>