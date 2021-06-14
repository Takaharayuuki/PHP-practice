<?php

require_once('config.php');

session_start();
$mail = $_POST['mail'];

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
var_dump($member['password']);
var_dump($_POST['password']);

if(password_verify($_POST['password'], $member['password'])) {

  $_SESSION['id'] = $member['id'];
  $_SESSION['name'] = $member['name'];
  $msg = 'ログインしました。';
  $link = '<a href="index.php">ホーム</a>';
} else {
  $msg = 'メールアドレスもしくは、パスワードが間違っています。';
  $link = '<a href="login_form.php">戻る</a>';
}

?>

<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>