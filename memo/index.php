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

  $memos = $db->query('SELECT * FROM memos ORDER BY id DESC');
  ?>

  <article>
    <?php while ($memo = $memos->fetch()) : ?>
      <p><a href="memo.php?id=<?php echo $memo['id'] ?>"><?php print(mb_substr($memo['memo'], 0, 50)); ?></a></p>
      <p><?php print($memo['created_at']); ?></p>
      <hr>
    <?php endwhile; ?>
  </article>
</body>

</html>