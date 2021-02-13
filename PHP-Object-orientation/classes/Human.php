<?php

class Human extends Lives
{
  // プロパティ
  const MAX_HITPOINT = 100;

  // メソッド

  // コンストラクターでプロパティの初期値を設定する
  public function __construct($name, $hitPoint = 100, $attackPoint = 20, $intelligence = 0)
  {
    parent::__construct($name, $hitPoint, $attackPoint, $intelligence);
  }
}
