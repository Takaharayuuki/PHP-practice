<?php

$rec = array();

$rec['USER_EMAIL'] = 'test@test.com';
$rec['USER_PASSWORD'] = 'test1234';
$rec['USER_NAME'] = '田中太郎';
$rec['USER_NAME_KANA'] = 'タナカタロウ';
$rec['USER_TEL'] = '00012345678';
$rec['USER_ADDRESS'] = '東京都東池袋';

$array = array();

$array[] = $rec;
$array[] = $rec;
$array[] = $rec;
$array[] = $rec;
$array[] = $rec;

$data = $array;

header("Access-Control-Allow-Origin: *");

echo json_encode($data);
