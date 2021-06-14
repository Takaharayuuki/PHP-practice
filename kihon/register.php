<?php
require_once('config.php');

$name = $_POST['name'];
$mail = $_POST['mail'];
$password =  password_hash($_POST['password'], PASSWORD_DEFAULT);

try {
  $dbh = new PDO(DSN, DB_USER, DB_PASS);
} catch (PDOException $e) {
  echo $e->getMessage() . PHP_EOL;
}

$sql = "SELECT * FROM user WHERE mail = :mail";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':mail', $mail);
$stmt->execute();
$member = $stmt->fetch();
if ($member['mail'] === $mail) {
  $msg = '同じメールアドレスが存在します。';
  $link = '<a href="signup.php">戻る</a>';
} else {
  $sql = <<< SQL
  INSERT INTO user(name, mail ,password) VALUES (:name, :mail, :password);
  SQL;
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(':name', $name);
  $stmt->bindValue(':mail', $mail);
  $stmt->bindValue(':password', $password);
  $stmt->execute();
  $msg = '会員登録が完了しました';
  $link = '<a href="login.php">ログインページ</a>';
}

?>

<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>