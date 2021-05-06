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

  // $count = $db->exec('INSERT INTO my_items SET maker_id=1, item_name="もも",item_name_kana="モモ",price=210, keyword="缶詰、ピンク、甘い",sales=2');
  // print_r($db->errorInfo());
  // echo $count . '件のデータを追加';
  $records = $db->query('SELECT * FROM my_items');
  while ($record = $records->fetch()) {
    print($record['item_name'] . "\n");
  }

  ?>
</body>

</html>