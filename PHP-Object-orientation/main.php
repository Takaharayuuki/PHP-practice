<?php
//ファイルのロード
require_once('./classes/Human.php');
require_once('./classes/Enemy.php');
require_once('./classes/Brave.php');
require_once('./classes/BlackMage.php');
require_once('./classes/WhiteMage.php');

// インスタンス化
$members = array();
$members[] = new Brave('ティーダ');
$members[] = new WhiteMage('ユウナ');
$members[] = new BlackMage('ルールー');

$enemies = array();
$enemies[] = new Enemy('ゴブリン', 20);
$enemies[] = new Enemy('ボム', 25);
$enemies[] = new Enemy('モルボル', 30);

$turn = 1;
$isFinishFlg = false;

while (!$isFinishFlg) {
  echo "*** $turn ターン目 ***\n\n";

  // const定数で定義した値を参照する場合は $tiida::MAX_HITPOINT のように -> ではなく :: で参照する
  foreach ($members as $member) {
    echo $member->getName() . ":" . $member->getHitPoint() . "/" . $member::MAX_HITPOINT . "\n";
  }
  foreach ($enemies as $enemy) {
    echo $enemy->getName() . ":" . $enemy->getHitPoint() . "/" . $enemy::MAX_HITPOINT . "\n";
  }
  echo "\n";

  // 攻撃
  foreach ($members as $member) {
    $enemyIndex = rand(0, count($enemies) - 1);
    $enemy = $enemies[$enemyIndex];

    if (get_class($member) == "WhiteMage") {
      $member->doAttackWhiteMage($enemy, $member);
    } else {
      $member->doAttack($enemy);
    }
    echo "\n";
  }
  echo "\n";

  foreach ($enemies as $enemy) {
    $memberIndex = rand(0, count($members) - 1);
    $member = $members[$memberIndex];
    $enemy->doAttack($member);
    echo "\n";
  }

  $deathCnt = 0;
  foreach ($members as $member) {
    if ($member->getHitPoint() > 0) {
      $isFinishFlg = false;
      break;
    }
    $deathCnt++;
  }
  if ($deathCnt === count($members)) {
    $isFinishFlg = true;
    echo "GAME OVER ....\n\n";
    break;
  }

  $deathCnt = 0;
  foreach ($enemies as $enemy) {
    if ($enemy->getHitPoint() > 0) {
      $isFinishFlg = false;
      break;
    }
    $deathCnt++;
  }
  if ($deathCnt === count($enemies)) {
    $isFinishFlg = true;
    echo "勝利！\n";
    break;
  }

  $turn++;
}

echo "終了\n";
foreach ($members as $member) {
  echo $member->getName() . " : " . $member->getHitPoint() . "/" . $member::MAX_HITPOINT . "\n";
}
foreach ($enemies as $enemy) {
  echo $enemy->getName() . " : " . $enemy->getHitPoint() . "/" . $enemy::MAX_HITPOINT . "\n";
}
