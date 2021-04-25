<?php
$pref = '神奈川';

function get_pref($pref)
{
  switch ($pref) {
    case '東京':
      print('関東です');
      break;
    case '千葉':
      print('関東です');
      break;
    case '神奈川':
      print('関東です');
      break;
    case '大阪':
      print('関西です');
      break;
  }
}

header("Access-Control-Allow-Origin: *");

$date = get_pref($pref);
echo json_encode($data);
